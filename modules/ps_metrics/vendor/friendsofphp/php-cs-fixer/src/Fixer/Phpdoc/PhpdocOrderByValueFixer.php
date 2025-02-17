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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\Phpdoc;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\DocBlock\DocBlock;
use ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\ConfigurableFixerInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\AllowedValueSubset;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerConfigurationResolver;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerConfigurationResolverInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerConfiguration\FixerOptionBuilder;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Preg;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
use Symfony\Component\OptionsResolver\Options;
/**
 * @author Filippo Tessarotto <zoeslam@gmail.com>
 * @author Andreas Möller <am@localheinz.com>
 */
final class PhpdocOrderByValueFixer extends AbstractFixer implements ConfigurableFixerInterface
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Order phpdoc tags by value.', [new CodeSample('<?php
/**
 * @covers Foo
 * @covers Bar
 */
final class MyTest extends \\PHPUnit_Framework_TestCase
{}
'), new CodeSample('<?php
/**
 * @author Bob
 * @author Alice
 */
final class MyTest extends \\PHPUnit_Framework_TestCase
{}
', ['annotations' => ['author']])]);
    }
    /**
     * {@inheritdoc}
     *
     * Must run before PhpdocAlignFixer.
     * Must run after AlignMultilineCommentFixer, CommentToPhpdocFixer, PhpUnitFqcnAnnotationFixer, PhpdocIndentFixer, PhpdocScalarFixer, PhpdocToCommentFixer, PhpdocTypesFixer.
     */
    public function getPriority() : int
    {
        return -10;
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isAllTokenKindsFound([\T_CLASS, \T_DOC_COMMENT]);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        if ([] === $this->configuration['annotations']) {
            return;
        }
        for ($index = $tokens->count() - 1; $index > 0; --$index) {
            foreach ($this->configuration['annotations'] as $type => $typeLowerCase) {
                $findPattern = \sprintf('/@%s\\s.+@%s\\s/s', $type, $type);
                if (!$tokens[$index]->isGivenKind(\T_DOC_COMMENT) || 0 === Preg::match($findPattern, $tokens[$index]->getContent())) {
                    continue;
                }
                $docBlock = new DocBlock($tokens[$index]->getContent());
                $annotations = $docBlock->getAnnotationsOfType($type);
                $annotationMap = [];
                if (\in_array($type, ['property', 'property-read', 'property-write'], \true)) {
                    $replacePattern = \sprintf('/(?s)\\*\\s*@%s\\s+(?P<optionalTypes>.+\\s+)?\\$(?P<comparableContent>[^\\s]+).*/', $type);
                    $replacement = '\\2';
                } elseif ('method' === $type) {
                    $replacePattern = '/(?s)\\*\\s*@method\\s+(?P<optionalReturnTypes>.+\\s+)?(?P<comparableContent>.+)\\(.*/';
                    $replacement = '\\2';
                } else {
                    $replacePattern = \sprintf('/\\*\\s*@%s\\s+(?P<comparableContent>.+)/', $typeLowerCase);
                    $replacement = '\\1';
                }
                foreach ($annotations as $annotation) {
                    $rawContent = $annotation->getContent();
                    $comparableContent = Preg::replace($replacePattern, $replacement, \strtolower(\trim($rawContent)));
                    $annotationMap[$comparableContent] = $rawContent;
                }
                $orderedAnnotationMap = $annotationMap;
                \ksort($orderedAnnotationMap, \SORT_STRING);
                if ($orderedAnnotationMap === $annotationMap) {
                    continue;
                }
                $lines = $docBlock->getLines();
                foreach (\array_reverse($annotations) as $annotation) {
                    \array_splice($lines, $annotation->getStart(), $annotation->getEnd() - $annotation->getStart() + 1, \array_pop($orderedAnnotationMap));
                }
                $tokens[$index] = new Token([\T_DOC_COMMENT, \implode('', $lines)]);
            }
        }
    }
    protected function createConfigurationDefinition() : FixerConfigurationResolverInterface
    {
        $allowedValues = ['author', 'covers', 'coversNothing', 'dataProvider', 'depends', 'group', 'internal', 'method', 'property', 'property-read', 'property-write', 'requires', 'throws', 'uses'];
        return new FixerConfigurationResolver([(new FixerOptionBuilder('annotations', 'List of annotations to order, e.g. `["covers"]`.'))->setAllowedTypes(['array'])->setAllowedValues([new AllowedValueSubset($allowedValues)])->setNormalizer(static function (Options $options, $value) : array {
            $normalized = [];
            foreach ($value as $annotation) {
                // since we will be using "strtolower" on the input annotations when building the sorting
                // map we must match the type in lower case as well
                $normalized[$annotation] = \strtolower($annotation);
            }
            return $normalized;
        })->setDefault(['covers'])->getOption()]);
    }
}
