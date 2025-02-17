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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\Console\Report\ListSetsReport;

use ps_metrics_module_v4_0_6\PhpCsFixer\RuleSet\RuleSetDescriptionInterface;
/**
 * @author Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * @internal
 */
final class ReportSummary
{
    /**
     * @var RuleSetDescriptionInterface[]
     */
    private $sets;
    /**
     * @param RuleSetDescriptionInterface[] $sets
     */
    public function __construct(array $sets)
    {
        $this->sets = $sets;
    }
    /**
     * @return RuleSetDescriptionInterface[]
     */
    public function getSets() : array
    {
        return $this->sets;
    }
}
