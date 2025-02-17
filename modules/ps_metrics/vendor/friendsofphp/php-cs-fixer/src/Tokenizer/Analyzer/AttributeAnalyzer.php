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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Analyzer;

use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @internal
 */
final class AttributeAnalyzer
{
    private const TOKEN_KINDS_NOT_ALLOWED_IN_ATTRIBUTE = [';', '{', [\T_ATTRIBUTE], [\T_FUNCTION], [\T_OPEN_TAG], [\T_OPEN_TAG_WITH_ECHO], [\T_PRIVATE], [\T_PROTECTED], [\T_PUBLIC], [\T_RETURN], [\T_VARIABLE], [CT::T_ATTRIBUTE_CLOSE]];
    /**
     * Check if given index is an attribute declaration.
     */
    public static function isAttribute(Tokens $tokens, int $index) : bool
    {
        if (!\defined('T_ATTRIBUTE') || !$tokens[$index]->isGivenKind(\T_STRING) || !$tokens->isAnyTokenKindsFound([\T_ATTRIBUTE])) {
            return \false;
        }
        $attributeStartIndex = $tokens->getPrevTokenOfKind($index, self::TOKEN_KINDS_NOT_ALLOWED_IN_ATTRIBUTE);
        if (!$tokens[$attributeStartIndex]->isGivenKind(\T_ATTRIBUTE)) {
            return \false;
        }
        // now, between attribute start and the attribute candidate index cannot be more "(" than ")"
        $count = 0;
        for ($i = $attributeStartIndex + 1; $i < $index; ++$i) {
            if ($tokens[$i]->equals('(')) {
                ++$count;
            } elseif ($tokens[$i]->equals(')')) {
                --$count;
            }
        }
        return 0 === $count;
    }
}
