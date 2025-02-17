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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\NamespaceNotation;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractLinesBeforeNamespaceFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\VersionSpecification;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\VersionSpecificCodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
final class CleanNamespaceFixer extends AbstractLinesBeforeNamespaceFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        $samples = [];
        foreach (['namespace Foo \\ Bar;', 'echo foo /* comment */ \\ bar();'] as $sample) {
            $samples[] = new VersionSpecificCodeSample("<?php\n" . $sample . "\n", new VersionSpecification(null, 80000 - 1));
        }
        return new FixerDefinition('Namespace must not contain spacing, comments or PHPDoc.', $samples);
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return \PHP_VERSION_ID < 80000 && $tokens->isTokenKindFound(\T_NS_SEPARATOR);
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $count = $tokens->count();
        for ($index = 0; $index < $count; ++$index) {
            if ($tokens[$index]->isGivenKind(\T_NS_SEPARATOR)) {
                $previousIndex = $tokens->getPrevMeaningfulToken($index);
                $index = $this->fixNamespace($tokens, $tokens[$previousIndex]->isGivenKind(\T_STRING) ? $previousIndex : $index);
            }
        }
    }
    /**
     * @param int $index start of namespace
     */
    private function fixNamespace(Tokens $tokens, int $index) : int
    {
        $tillIndex = $index;
        // go to the end of the namespace
        while ($tokens[$tillIndex]->isGivenKind([\T_NS_SEPARATOR, \T_STRING])) {
            $tillIndex = $tokens->getNextMeaningfulToken($tillIndex);
        }
        $tillIndex = $tokens->getPrevMeaningfulToken($tillIndex);
        $spaceIndexes = [];
        for (; $index <= $tillIndex; ++$index) {
            if ($tokens[$index]->isGivenKind(\T_WHITESPACE)) {
                $spaceIndexes[] = $index;
            } elseif ($tokens[$index]->isComment()) {
                $tokens->clearAt($index);
            }
        }
        if ($tokens[$index - 1]->isWhitespace()) {
            \array_pop($spaceIndexes);
        }
        foreach ($spaceIndexes as $i) {
            $tokens->clearAt($i);
        }
        return $index;
    }
}
