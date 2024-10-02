<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97020 = null;
    private $initializercfac5 = null;
    private static $publicProperties142b5 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getList', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getInstalledModules', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getMustBeConfiguredModules', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getUpgradableModules', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getModule', array('moduleName' => $moduleName), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'setActionUrls', array('collection' => $collection), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializercfac5 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder97020) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder97020 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder97020->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__get', ['name' => $name], $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        if (isset(self::$publicProperties142b5[$name])) {
            return $this->valueHolder97020->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97020;
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
        $targetObject = $this->valueHolder97020;
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
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97020;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder97020;
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
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__isset', array('name' => $name), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97020;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder97020;
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
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__unset', array('name' => $name), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97020;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder97020;
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
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__clone', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        $this->valueHolder97020 = clone $this->valueHolder97020;
    }
    public function __sleep()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__sleep', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return array('valueHolder97020');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercfac5 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercfac5;
    }
    public function initializeProxy() : bool
    {
        return $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'initializeProxy', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97020;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97020;
    }
}
