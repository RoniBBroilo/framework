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
namespace ps_metrics_module_v4_0_6\PhpCsFixer\RuleSet;

use ps_metrics_module_v4_0_6\PhpCsFixer\Preg;
/**
 * @internal
 */
abstract class AbstractMigrationSetDescription extends AbstractRuleSetDescription
{
    public function getDescription() : string
    {
        $name = $this->getName();
        if (0 !== Preg::match('#^@PHPUnit([\\d]{2})Migration.*$#', $name, $matches)) {
            return \sprintf('Rules to improve tests code for PHPUnit %d.%d compatibility.', $matches[1][0], $matches[1][1]);
        }
        if (0 !== Preg::match('#^@PHP([\\d]{2})Migration.*$#', $name, $matches)) {
            return \sprintf('Rules to improve code for PHP %d.%d compatibility.', $matches[1][0], $matches[1][1]);
        }
        throw new \RuntimeException(\sprintf('Cannot generate description for "%s" "%s".', static::class, $name));
    }
}
