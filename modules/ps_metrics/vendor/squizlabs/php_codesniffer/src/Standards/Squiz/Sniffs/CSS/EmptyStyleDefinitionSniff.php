<?php

/**
 * Ensure that style definitions are not empty.
 *
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @copyright 2006-2015 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/PHPCSStandards/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 *
 * @deprecated 3.9.0
 */
namespace ps_metrics_module_v4_0_6\PHP_CodeSniffer\Standards\Squiz\Sniffs\CSS;

use ps_metrics_module_v4_0_6\PHP_CodeSniffer\Files\File;
use ps_metrics_module_v4_0_6\PHP_CodeSniffer\Sniffs\Sniff;
use ps_metrics_module_v4_0_6\PHP_CodeSniffer\Util\Tokens;
class EmptyStyleDefinitionSniff implements Sniff
{
    /**
     * A list of tokenizers this sniff supports.
     *
     * @var array
     */
    public $supportedTokenizers = ['CSS'];
    /**
     * Returns the token types that this sniff is interested in.
     *
     * @return array<int|string>
     */
    public function register()
    {
        return [T_STYLE];
    }
    //end register()
    /**
     * Processes the tokens that this sniff is interested in.
     *
     * @param \PHP_CodeSniffer\Files\File $phpcsFile The file where the token was found.
     * @param int                         $stackPtr  The position in the stack where
     *                                               the token was found.
     *
     * @return void
     */
    public function process(File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();
        $ignore = Tokens::$emptyTokens;
        $ignore[] = T_COLON;
        $next = $phpcsFile->findNext($ignore, $stackPtr + 1, null, \true);
        if ($next === \false || $tokens[$next]['code'] === T_SEMICOLON || $tokens[$next]['line'] !== $tokens[$stackPtr]['line']) {
            $error = 'Style definition is empty';
            $phpcsFile->addError($error, $stackPtr, 'Found');
        }
    }
    //end process()
}
//end class
