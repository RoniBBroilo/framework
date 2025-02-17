<?php

declare (strict_types=1);
/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Transformer;

use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\AbstractTransformer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * Transform `?` operator into CT::T_NULLABLE_TYPE in `function foo(?Bar $b) {}`.
 *
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class NullableTypeTransformer extends AbstractTransformer
{
    /**
     * {@inheritdoc}
     */
    public function getPriority() : int
    {
        // needs to run after TypeColonTransformer
        return -20;
    }
    /**
     * {@inheritdoc}
     */
    public function getRequiredPhpVersionId() : int
    {
        return 70100;
    }
    /**
     * {@inheritdoc}
     */
    public function process(Tokens $tokens, Token $token, int $index) : void
    {
        if (!$token->equals('?')) {
            return;
        }
        static $types;
        if (null === $types) {
            $types = ['(', ',', [CT::T_TYPE_COLON], [CT::T_CONSTRUCTOR_PROPERTY_PROMOTION_PUBLIC], [CT::T_CONSTRUCTOR_PROPERTY_PROMOTION_PROTECTED], [CT::T_CONSTRUCTOR_PROPERTY_PROMOTION_PRIVATE], [CT::T_ATTRIBUTE_CLOSE], [\T_PRIVATE], [\T_PROTECTED], [\T_PUBLIC], [\T_VAR], [\T_STATIC]];
            if (\defined('T_READONLY')) {
                // @TODO: drop condition when PHP 8.1+ is required
                $types[] = [\T_READONLY];
            }
        }
        $prevIndex = $tokens->getPrevMeaningfulToken($index);
        if ($tokens[$prevIndex]->equalsAny($types)) {
            $tokens[$index] = new Token([CT::T_NULLABLE_TYPE, '?']);
        }
    }
    /**
     * {@inheritdoc}
     */
    public function getCustomTokens() : array
    {
        return [CT::T_NULLABLE_TYPE];
    }
}
