<?php

declare (strict_types=1);
namespace ps_metrics_module_v4_0_6\PhpParser\Node\Expr;

use ps_metrics_module_v4_0_6\PhpParser\Node\Arg;
use ps_metrics_module_v4_0_6\PhpParser\Node\Expr;
use ps_metrics_module_v4_0_6\PhpParser\Node\Identifier;
use ps_metrics_module_v4_0_6\PhpParser\Node\VariadicPlaceholder;
class NullsafeMethodCall extends CallLike
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Method name */
    public $name;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
    public $args;
    /**
     * Constructs a nullsafe method call node.
     *
     * @param Expr                           $var        Variable holding object
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
     */
    public function __construct(Expr $var, $name, array $args = [], array $attributes = [])
    {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }
    public function getSubNodeNames() : array
    {
        return ['var', 'name', 'args'];
    }
    public function getType() : string
    {
        return 'Expr_NullsafeMethodCall';
    }
    public function getRawArgs() : array
    {
        return $this->args;
    }
}
