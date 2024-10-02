<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder97020 = null;
    private $initializercfac5 = null;
    private static $publicProperties142b5 = [
        
    ];
    public function getConnection()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getConnection', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getMetadataFactory', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getExpressionBuilder', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'beginTransaction', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->beginTransaction();
    }
    public function getCache()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getCache', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getCache();
    }
    public function transactional($func)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'transactional', array('func' => $func), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'wrapInTransaction', array('func' => $func), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'commit', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->commit();
    }
    public function rollback()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'rollback', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getClassMetadata', array('className' => $className), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'createQuery', array('dql' => $dql), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'createNamedQuery', array('name' => $name), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'createQueryBuilder', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'flush', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'clear', array('entityName' => $entityName), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->clear($entityName);
    }
    public function close()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'close', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->close();
    }
    public function persist($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'persist', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'remove', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'refresh', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'detach', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'merge', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getRepository', array('entityName' => $entityName), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'contains', array('entity' => $entity), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getEventManager', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getConfiguration', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'isOpen', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getUnitOfWork', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getProxyFactory', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'initializeObject', array('obj' => $obj), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'getFilters', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'isFiltersStateClean', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, 'hasFilters', array(), $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        return $this->valueHolder97020->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializercfac5 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder97020) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97020 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder97020->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializercfac5 && ($this->initializercfac5->__invoke($valueHolder97020, $this, '__get', ['name' => $name], $this->initializercfac5) || 1) && $this->valueHolder97020 = $valueHolder97020;
        if (isset(self::$publicProperties142b5[$name])) {
            return $this->valueHolder97020->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
