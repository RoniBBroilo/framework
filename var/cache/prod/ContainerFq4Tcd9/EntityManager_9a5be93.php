<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderba914 = null;
    private $initializerf248b = null;
    private static $publicPropertiesce8da = [
        
    ];
    public function getConnection()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getConnection', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getMetadataFactory', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getExpressionBuilder', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'beginTransaction', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getCache', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getCache();
    }
    public function transactional($func)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'transactional', array('func' => $func), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'wrapInTransaction', array('func' => $func), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'commit', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->commit();
    }
    public function rollback()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'rollback', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getClassMetadata', array('className' => $className), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'createQuery', array('dql' => $dql), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'createNamedQuery', array('name' => $name), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'createQueryBuilder', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'flush', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'clear', array('entityName' => $entityName), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->clear($entityName);
    }
    public function close()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'close', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->close();
    }
    public function persist($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'persist', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'remove', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'refresh', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'detach', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'merge', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'contains', array('entity' => $entity), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getEventManager', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getConfiguration', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'isOpen', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getUnitOfWork', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getProxyFactory', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'initializeObject', array('obj' => $obj), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'getFilters', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'isFiltersStateClean', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, 'hasFilters', array(), $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        return $this->valueHolderba914->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerf248b = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolderba914) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderba914 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolderba914->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerf248b && ($this->initializerf248b->__invoke($valueHolderba914, $this, '__get', ['name' => $name], $this->initializerf248b) || 1) && $this->valueHolderba914 = $valueHolderba914;
        if (isset(self::$publicPropertiesce8da[$name])) {
            return $this->valueHolderba914->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
