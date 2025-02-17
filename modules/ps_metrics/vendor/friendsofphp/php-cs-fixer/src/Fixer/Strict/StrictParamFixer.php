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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Fixer\Strict;

use ps_metrics_module_v4_0_6\PhpCsFixer\AbstractFixer;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\CodeSample;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinition;
use ps_metrics_module_v4_0_6\PhpCsFixer\FixerDefinition\FixerDefinitionInterface;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Analyzer\FunctionsAnalyzer;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\CT;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Token;
use ps_metrics_module_v4_0_6\PhpCsFixer\Tokenizer\Tokens;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 */
final class StrictParamFixer extends AbstractFixer
{
    /**
     * {@inheritdoc}
     */
    public function getDefinition() : FixerDefinitionInterface
    {
        return new FixerDefinition('Functions should be used with `$strict` param set to `true`.', [new CodeSample("<?php\n\$a = array_keys(\$b);\n\$a = array_search(\$b, \$c);\n\$a = base64_decode(\$b);\n\$a = in_array(\$b, \$c);\n\$a = mb_detect_encoding(\$b, \$c);\n")], 'The functions "array_keys", "array_search", "base64_decode", "in_array" and "mb_detect_encoding" should be used with $strict param.', 'Risky when the fixed function is overridden or if the code relies on non-strict usage.');
    }
    /**
     * {@inheritdoc}
     */
    public function isCandidate(Tokens $tokens) : bool
    {
        return $tokens->isTokenKindFound(\T_STRING);
    }
    /**
     * {@inheritdoc}
     */
    public function isRisky() : bool
    {
        return \true;
    }
    /**
     * {@inheritdoc}
     *
     * Must run before MethodArgumentSpaceFixer, NativeFunctionInvocationFixer.
     */
    public function getPriority() : int
    {
        return 31;
    }
    /**
     * {@inheritdoc}
     */
    protected function applyFix(\SplFileInfo $file, Tokens $tokens) : void
    {
        $functionsAnalyzer = new FunctionsAnalyzer();
        static $map = null;
        if (null === $map) {
            $trueToken = new Token([\T_STRING, 'true']);
            $map = ['array_keys' => [null, null, $trueToken], 'array_search' => [null, null, $trueToken], 'base64_decode' => [null, $trueToken], 'in_array' => [null, null, $trueToken], 'mb_detect_encoding' => [null, [new Token([\T_STRING, 'mb_detect_order']), new Token('('), new Token(')')], $trueToken]];
        }
        for ($index = $tokens->count() - 1; 0 <= $index; --$index) {
            $token = $tokens[$index];
            $nextIndex = $tokens->getNextMeaningfulToken($index);
            if (null !== $nextIndex && !$tokens[$nextIndex]->equals('(')) {
                continue;
            }
            $lowercaseContent = \strtolower($token->getContent());
            if (isset($map[$lowercaseContent]) && $functionsAnalyzer->isGlobalFunctionCall($tokens, $index)) {
                $this->fixFunction($tokens, $index, $map[$lowercaseContent]);
            }
        }
    }
    private function fixFunction(Tokens $tokens, int $functionIndex, array $functionParams) : void
    {
        $startBraceIndex = $tokens->getNextTokenOfKind($functionIndex, ['(']);
        $endBraceIndex = $tokens->findBlockEnd(Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $startBraceIndex);
        $paramsQuantity = 0;
        $expectParam = \true;
        for ($index = $startBraceIndex + 1; $index < $endBraceIndex; ++$index) {
            $token = $tokens[$index];
            if ($expectParam && !$token->isWhitespace() && !$token->isComment()) {
                ++$paramsQuantity;
                $expectParam = \false;
            }
            if ($token->equals('(')) {
                $index = $tokens->findBlockEnd(Tokens::BLOCK_TYPE_PARENTHESIS_BRACE, $index);
                continue;
            }
            if ($token->isGivenKind(CT::T_ARRAY_SQUARE_BRACE_OPEN)) {
                $index = $tokens->findBlockEnd(Tokens::BLOCK_TYPE_ARRAY_SQUARE_BRACE, $index);
                continue;
            }
            if ($token->equals(',')) {
                $expectParam = \true;
                continue;
            }
        }
        $functionParamsQuantity = \count($functionParams);
        if ($paramsQuantity === $functionParamsQuantity) {
            return;
        }
        $tokensToInsert = [];
        for ($i = $paramsQuantity; $i < $functionParamsQuantity; ++$i) {
            // function call do not have all params that are required to set useStrict flag, exit from method!
            if (!$functionParams[$i]) {
                return;
            }
            $tokensToInsert[] = new Token(',');
            $tokensToInsert[] = new Token([\T_WHITESPACE, ' ']);
            if (!\is_array($functionParams[$i])) {
                $tokensToInsert[] = clone $functionParams[$i];
                continue;
            }
            foreach ($functionParams[$i] as $param) {
                $tokensToInsert[] = clone $param;
            }
        }
        $beforeEndBraceIndex = $tokens->getPrevMeaningfulToken($endBraceIndex);
        if ($tokens[$beforeEndBraceIndex]->equals(',')) {
            \array_shift($tokensToInsert);
            $tokensToInsert[] = new Token(',');
        }
        $tokens->insertAt($beforeEndBraceIndex + 1, $tokensToInsert);
    }
}
