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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Console\Report\FixReport;

use Symfony\Component\Finder\Finder as SymfonyFinder;
use Symfony\Component\Finder\SplFileInfo;
/**
 * @author Boris Gorbylev <ekho@ekho.name>
 *
 * @internal
 */
final class ReporterFactory
{
    /** @var ReporterInterface[] */
    private $reporters = [];
    public function registerBuiltInReporters() : self
    {
        /** @var null|string[] $builtInReporters */
        static $builtInReporters;
        if (null === $builtInReporters) {
            $builtInReporters = [];
            /** @var SplFileInfo $file */
            foreach (SymfonyFinder::create()->files()->name('*Reporter.php')->in(__DIR__) as $file) {
                $relativeNamespace = $file->getRelativePath();
                $builtInReporters[] = \sprintf('%s\\%s%s', __NAMESPACE__, $relativeNamespace ? $relativeNamespace . '\\' : '', $file->getBasename('.php'));
            }
        }
        foreach ($builtInReporters as $reporterClass) {
            $this->registerReporter(new $reporterClass());
        }
        return $this;
    }
    /**
     * @return $this
     */
    public function registerReporter(ReporterInterface $reporter) : self
    {
        $format = $reporter->getFormat();
        if (isset($this->reporters[$format])) {
            throw new \UnexpectedValueException(\sprintf('Reporter for format "%s" is already registered.', $format));
        }
        $this->reporters[$format] = $reporter;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getFormats() : array
    {
        $formats = \array_keys($this->reporters);
        \sort($formats);
        return $formats;
    }
    public function getReporter(string $format) : ReporterInterface
    {
        if (!isset($this->reporters[$format])) {
            throw new \UnexpectedValueException(\sprintf('Reporter for format "%s" is not registered.', $format));
        }
        return $this->reporters[$format];
    }
}
