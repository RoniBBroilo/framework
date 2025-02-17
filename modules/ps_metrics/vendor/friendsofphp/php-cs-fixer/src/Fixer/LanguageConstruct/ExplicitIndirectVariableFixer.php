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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\LanguageConstruct;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Filippo Tessarotto <zoeslam@gmail.com>
 */
final class ExplicitIndirectVariableFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Add curly braces to indirect variables to make them clear to understand. Requires PHP >= 7.0.', [new CodeSample(<<<'EOT'
<?php

namespace ps_metrics_module_v4_0_6;

echo ${$foo};
echo ${$foo}['bar'];
echo $foo->{$bar}['baz'];
echo $foo->{$callback}($baz);

EOT
)]);
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_VARIABLE);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        for ($index = $tokens->count() - 1; $index > 1; --$index) {
            $token = $tokens[$index];
            if (!$token->isGivenKind(\T_VARIABLE)) {
                continue;
            }
            $prevIndex = $tokens->getPrevMeaningfulToken($index);
            $prevToken = $tokens[$prevIndex];
            if (!$prevToken->equals('$') && !$prevToken->isObjectOperator()) {
                continue;
            }
            $openingBrace = CT::T_DYNAMIC_VAR_BRACE_OPEN;
            $closingBrace = CT::T_DYNAMIC_VAR_BRACE_CLOSE;
            if ($prevToken->isObjectOperator()) {
                $openingBrace = CT::T_DYNAMIC_PROP_BRACE_OPEN;
                $closingBrace = CT::T_DYNAMIC_PROP_BRACE_CLOSE;
            }
            $tokens->overrideRange($index, $index, [new Token([$openingBrace, '{']), new Token([\T_VARIABLE, $token->getContent()]), new Token([$closingBrace, '}'])]);
        }
    }
}
