<?php

namespace ContainerISxPz2y;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder62420 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerc1728 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescf1c3 = [
        
    ];

    public function getConnection()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getConnection', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getMetadataFactory', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getExpressionBuilder', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'beginTransaction', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getCache', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getCache();
    }

    public function transactional($func)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'transactional', array('func' => $func), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'commit', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->commit();
    }

    public function rollback()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'rollback', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getClassMetadata', array('className' => $className), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'createQuery', array('dql' => $dql), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'createNamedQuery', array('name' => $name), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'createQueryBuilder', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'flush', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'clear', array('entityName' => $entityName), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->clear($entityName);
    }

    public function close()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'close', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->close();
    }

    public function persist($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'persist', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'remove', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'refresh', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'detach', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'merge', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'contains', array('entity' => $entity), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getEventManager', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getConfiguration', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'isOpen', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getUnitOfWork', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getProxyFactory', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'initializeObject', array('obj' => $obj), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'getFilters', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'isFiltersStateClean', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'hasFilters', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return $this->valueHolder62420->hasFilters();
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

        $instance->initializerc1728 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder62420) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder62420 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder62420->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__get', ['name' => $name], $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        if (isset(self::$publicPropertiescf1c3[$name])) {
            return $this->valueHolder62420->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62420;

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

        $targetObject = $this->valueHolder62420;
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
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62420;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder62420;
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
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__isset', array('name' => $name), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62420;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder62420;
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
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__unset', array('name' => $name), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder62420;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder62420;
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
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__clone', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        $this->valueHolder62420 = clone $this->valueHolder62420;
    }

    public function __sleep()
    {
        $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, '__sleep', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;

        return array('valueHolder62420');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc1728 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc1728;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerc1728 && ($this->initializerc1728->__invoke($valueHolder62420, $this, 'initializeProxy', array(), $this->initializerc1728) || 1) && $this->valueHolder62420 = $valueHolder62420;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder62420;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder62420;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
