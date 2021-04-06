<?php

namespace ContainerCylniUR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb7149 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb8ed6 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties79287 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getConnection', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getMetadataFactory', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getExpressionBuilder', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'beginTransaction', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getCache', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'transactional', array('func' => $func), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->transactional($func);
    }

    public function commit()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'commit', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->commit();
    }

    public function rollback()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'rollback', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getClassMetadata', array('className' => $className), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'createQuery', array('dql' => $dql), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'createNamedQuery', array('name' => $name), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'createQueryBuilder', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'flush', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'clear', array('entityName' => $entityName), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->clear($entityName);
    }

    public function close()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'close', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->close();
    }

    public function persist($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'persist', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'remove', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'refresh', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'detach', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'merge', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'contains', array('entity' => $entity), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getEventManager', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getConfiguration', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'isOpen', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getUnitOfWork', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getProxyFactory', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'initializeObject', array('obj' => $obj), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'getFilters', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'isFiltersStateClean', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'hasFilters', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return $this->valueHolderb7149->hasFilters();
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

        $instance->initializerb8ed6 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb7149) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb7149 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb7149->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__get', ['name' => $name], $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        if (isset(self::$publicProperties79287[$name])) {
            return $this->valueHolderb7149->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7149;

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

        $targetObject = $this->valueHolderb7149;
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
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7149;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb7149;
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
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__isset', array('name' => $name), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7149;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb7149;
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
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__unset', array('name' => $name), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb7149;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb7149;
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
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__clone', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        $this->valueHolderb7149 = clone $this->valueHolderb7149;
    }

    public function __sleep()
    {
        $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, '__sleep', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;

        return array('valueHolderb7149');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb8ed6 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb8ed6;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb8ed6 && ($this->initializerb8ed6->__invoke($valueHolderb7149, $this, 'initializeProxy', array(), $this->initializerb8ed6) || 1) && $this->valueHolderb7149 = $valueHolderb7149;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb7149;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb7149;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
