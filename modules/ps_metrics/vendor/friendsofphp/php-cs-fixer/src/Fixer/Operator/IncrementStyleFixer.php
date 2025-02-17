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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\Operator;

use ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\AbstractIncrementOperatorFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ConfigurableFixerInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\TokensAnalyzer;
/**
 * @author Gregor Harlan <gharlan@web.de>
 * @author Kuba Werłos <werlos@gmail.com>
 */
final class IncrementStyleFixer extends AbstractIncrementOperatorFixer implements ConfigurableFixerInterface
{
    /**
     * @internal
     */
    public const STYLE_PRE = 'pre';
    /**
     * @internal
     */
    public const STYLE_POST = 'post';
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Pre- or post-increment and decrement operators should be used if possible.', [new CodeSample("<?php\n\$a++;\n\$b--;\n"), new CodeSample("<?php\n++\$a;\n--\$b;\n", ['style' => self::STYLE_POST])]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run after StandardizeIncrementFixer.
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
        return $tokens->isAnyTokenKindsFound([\T_INC, \T_DEC]);
    }
    /**
     * {@inheritdoc}
     */
    protected function createConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        return new FixerConfigurationResolver([(new FixerOptionBuilder('style', 'Whether to use pre- or post-increment and decrement operators.'))->setAllowedValues([self::STYLE_PRE, self::STYLE_POST])->setDefault(self::STYLE_PRE)->getOption()]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $tokensAnalyzer = new TokensAnalyzer($tokens);
        for ($index = $tokens->count() - 1; 0 <= $index; --$index) {
            $token = $tokens[$index];
            if (!$token->isGivenKind([\T_INC, \T_DEC])) {
                continue;
            }
            if (self::STYLE_PRE === $this->configuration['style'] && $tokensAnalyzer->isUnarySuccessorOperator($index)) {
                $nextToken = $tokens[$tokens->getNextMeaningfulToken($index)];
                if (!$nextToken->equalsAny([';', ')'])) {
                    continue;
                }
                $startIndex = $this->findStart($tokens, $index);
                $prevToken = $tokens[$tokens->getPrevMeaningfulToken($startIndex)];
                if ($prevToken->equalsAny([';', '{', '}', [\T_OPEN_TAG], ')'])) {
                    $tokens->clearAt($index);
                    $tokens->insertAt($startIndex, clone $token);
                }
            } elseif (self::STYLE_POST === $this->configuration['style'] && $tokensAnalyzer->isUnaryPredecessorOperator($index)) {
                $prevToken = $tokens[$tokens->getPrevMeaningfulToken($index)];
                if (!$prevToken->equalsAny([';', '{', '}', [\T_OPEN_TAG], ')'])) {
                    continue;
                }
                $endIndex = $this->findEnd($tokens, $index);
                $nextToken = $tokens[$tokens->getNextMeaningfulToken($endIndex)];
                if ($nextToken->equalsAny([';', ')'])) {
                    $tokens->clearAt($index);
                    $tokens->insertAt($tokens->getNextNonWhitespace($endIndex), clone $token);
                }
            }
        }
    }
    private function findEnd(Tokens $tokens, int $index) : int
    {
        $nextIndex = $tokens->getNextMeaningfulToken($index);
        $nextToken = $tokens[$nextIndex];
        while ($nextToken->equalsAny(['$', '(', '[', [CT::T_DYNAMIC_PROP_BRACE_OPEN], [CT::T_DYNAMIC_VAR_BRACE_OPEN], [CT::T_ARRAY_INDEX_CURLY_BRACE_OPEN], [\T_NS_SEPARATOR], [\T_STATIC], [\T_STRING], [\T_VARIABLE]])) {
            $blockType = Tokens::detectBlockType($nextToken);
            if (null !== $blockType) {
                $nextIndex = $tokens->findBlockEnd($blockType['type'], $nextIndex);
            }
            $index = $nextIndex;
            $nextIndex = $tokens->getNextMeaningfulToken($nextIndex);
            $nextToken = $tokens[$nextIndex];
        }
        if ($nextToken->isObjectOperator()) {
            return $this->findEnd($tokens, $nextIndex);
        }
        if ($nextToken->isGivenKind(\T_PAAMAYIM_NEKUDOTAYIM)) {
            return $this->findEnd($tokens, $tokens->getNextMeaningfulToken($nextIndex));
        }
        return $index;
    }
}
