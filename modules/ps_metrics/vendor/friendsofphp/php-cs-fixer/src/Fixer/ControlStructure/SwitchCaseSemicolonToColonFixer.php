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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ControlStructure;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Analyzer\Analysis\SwitchAnalysis;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Analyzer\ControlCaseStructuresAnalyzer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * Fixer for rules defined in PSR2 ¶5.2.
 */
final class SwitchCaseSemicolonToColonFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('A case should be followed by a colon and not a semicolon.', [new CodeSample('<?php
    switch ($a) {
        case 1;
            break;
        default;
            break;
    }
')]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run after NoEmptyStatementFixer.
     */
    public function getPriority() : int
    {
        return 0;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_SWITCH);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        /** @var SwitchAnalysis $analysis */
        foreach (ControlCaseStructuresAnalyzer::findControlStructures($tokens, [\T_SWITCH]) as $analysis) {
            $default = $analysis->getDefaultAnalysis();
            if (null !== $default) {
                $this->fixTokenIfNeeded($tokens, $default->getColonIndex());
            }
            foreach ($analysis->getCases() as $caseAnalysis) {
                $this->fixTokenIfNeeded($tokens, $caseAnalysis->getColonIndex());
            }
        }
    }
    private function fixTokenIfNeeded(Tokens $tokens, int $index) : void
    {
        if ($tokens[$index]->equals(';')) {
            $tokens[$index] = new Token(':');
        }
    }
}
