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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ReturnNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
final class NoUselessReturnFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAllTokenKindsFound([\T_FUNCTION, \T_RETURN]);
    }
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('There should not be an empty `return` statement at the end of a function.', [new CodeSample('<?php
function example($b) {
    if ($b) {
        return;
    }
    return;
}
')]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before BlankLineBeforeStatementFixer, NoExtraBlankLinesFixer, NoWhitespaceInBlankLineFixer, SingleLineCommentStyleFixer.
     * Must run after NoEmptyStatementFixer, NoUnneededCurlyBracesFixer, NoUselessElseFixer, SimplifiedNullReturnFixer.
     */
    public function getPriority() : int
    {
        return -18;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        foreach ($tokens as $index => $token) {
            if (!$token->isGivenKind(\T_FUNCTION)) {
                continue;
            }
            $index = $tokens->getNextTokenOfKind($index, [';', '{']);
            if ($tokens[$index]->equals('{')) {
                $this->fixFunction($tokens, $index, $tokens->findBlockEnd(Tokens::BLOCK_TYPE_CURLY_BRACE, $index));
            }
        }
    }
    /**
     * @param int $start Token index of the opening brace token of the function
     * @param int $end   Token index of the closing brace token of the function
     */
    private function fixFunction(Tokens $tokens, int $start, int $end) : void
    {
        for ($index = $end; $index > $start; --$index) {
            if (!$tokens[$index]->isGivenKind(\T_RETURN)) {
                continue;
            }
            $nextAt = $tokens->getNextMeaningfulToken($index);
            if (!$tokens[$nextAt]->equals(';')) {
                continue;
            }
            if ($tokens->getNextMeaningfulToken($nextAt) !== $end) {
                continue;
            }
            $previous = $tokens->getPrevMeaningfulToken($index);
            if ($tokens[$previous]->equalsAny([[\T_ELSE], ')'])) {
                continue;
            }
            $tokens->clearTokenAndMergeSurroundingWhitespace($index);
            $tokens->clearTokenAndMergeSurroundingWhitespace($nextAt);
        }
    }
}
