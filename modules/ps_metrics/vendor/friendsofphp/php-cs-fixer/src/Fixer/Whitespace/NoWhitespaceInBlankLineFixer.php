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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\Whitespace;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\WhitespacesAwareFixerInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Preg;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class NoWhitespaceInBlankLineFixer extends AbstractFixer implements WhitespacesAwareFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Remove trailing whitespace at the end of blank lines.', [new CodeSample("<?php\n   \n\$a = 1;\n")]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run after AssignNullCoalescingToCoalesceEqualFixer, CombineConsecutiveIssetsFixer, CombineConsecutiveUnsetsFixer, FunctionToConstantFixer, NoEmptyCommentFixer, NoEmptyPhpdocFixer, NoEmptyStatementFixer, NoUselessElseFixer, NoUselessReturnFixer.
     */
    public function getPriority() : int
    {
        return -19;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        // skip first as it cannot be a white space token
        for ($i = 1, $count = \count($tokens); $i < $count; ++$i) {
            if ($tokens[$i]->isWhitespace()) {
                $this->fixWhitespaceToken($tokens, $i);
            }
        }
    }
    private function fixWhitespaceToken(Tokens $tokens, int $index) : void
    {
        $content = $tokens[$index]->getContent();
        $lines = Preg::split("/(\r\n|\n)/", $content);
        $lineCount = \count($lines);
        if ($lineCount > 2 || $lineCount > 0 && (!isset($tokens[$index + 1]) || $tokens[$index - 1]->isGivenKind(\T_OPEN_TAG))) {
            $lMax = isset($tokens[$index + 1]) ? $lineCount - 1 : $lineCount;
            $lStart = 1;
            if ($tokens[$index - 1]->isGivenKind(\T_OPEN_TAG) && "\n" === \substr($tokens[$index - 1]->getContent(), -1)) {
                $lStart = 0;
            }
            for ($l = $lStart; $l < $lMax; ++$l) {
                $lines[$l] = Preg::replace('/^\\h+$/', '', $lines[$l]);
            }
            $content = \implode($this->whitespacesConfig->getLineEnding(), $lines);
            $tokens->ensureWhitespaceAtIndex($index, 0, $content);
        }
    }
}
