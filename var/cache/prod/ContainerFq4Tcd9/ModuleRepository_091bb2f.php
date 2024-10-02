<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderba914 = null;
    private $initializerf248b = null;
    private static $publicPropertiesce8da = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getList', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getInstalledModules', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getMustBeConfiguredModules', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getUpgradableModules', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'setActionUrls', array('collection' => $collection), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerf248b = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolderba914) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolderba914 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolderba914->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__get', ['name' => $name], $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        if (isset(self::$publicPropertiesce8da[$name])) {
            return $this->valueHolderba914->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba914;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderba914;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba914;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolderba914;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__isset', array('name' => $name), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba914;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolderba914;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__unset', array('name' => $name), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderba914;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderba914;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__clone', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        $this->valueHolderba914 = clone $this->valueHolderba914;
    }
    public function __sleep()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__sleep', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return array('valueHolderba914');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf248b = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf248b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'initializeProxy', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderba914;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderba914;
    }
}
