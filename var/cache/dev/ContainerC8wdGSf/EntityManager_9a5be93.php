<?php

namespace ContainerC8wdGSf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder0635b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1aa35 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescd7d3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getConnection', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getMetadataFactory', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getExpressionBuilder', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'beginTransaction', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getCache', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'transactional', array('func' => $func), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'commit', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->commit();
    }

    public function rollback()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'rollback', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getClassMetadata', array('className' => $className), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'createQuery', array('dql' => $dql), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'createNamedQuery', array('name' => $name), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'createQueryBuilder', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'flush', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'clear', array('entityName' => $entityName), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->clear($entityName);
    }

    public function close()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'close', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->close();
    }

    public function persist($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'persist', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'remove', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'refresh', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'detach', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'merge', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'contains', array('entity' => $entity), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getEventManager', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getConfiguration', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'isOpen', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getUnitOfWork', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getProxyFactory', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'initializeObject', array('obj' => $obj), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'getFilters', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'isFiltersStateClean', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'hasFilters', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return $this->valueHolder0635b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer1aa35 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder0635b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0635b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder0635b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__get', ['name' => $name], $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        if (isset(self::$publicPropertiescd7d3[$name])) {
            return $this->valueHolder0635b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0635b;

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

        $targetObject = $this->valueHolder0635b;
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
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0635b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder0635b;
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
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__isset', array('name' => $name), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0635b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder0635b;
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
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__unset', array('name' => $name), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0635b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder0635b;
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
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__clone', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        $this->valueHolder0635b = clone $this->valueHolder0635b;
    }

    public function __sleep()
    {
        $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, '__sleep', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;

        return array('valueHolder0635b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1aa35 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1aa35;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1aa35 && ($this->initializer1aa35->__invoke($valueHolder0635b, $this, 'initializeProxy', array(), $this->initializer1aa35) || 1) && $this->valueHolder0635b = $valueHolder0635b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0635b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0635b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
