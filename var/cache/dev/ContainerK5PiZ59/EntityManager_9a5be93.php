<?php

namespace ContainerK5PiZ59;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder84a77 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0d145 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3d18 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getConnection', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getMetadataFactory', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getExpressionBuilder', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'beginTransaction', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getCache', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'transactional', array('func' => $func), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->transactional($func);
    }

    public function commit()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'commit', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->commit();
    }

    public function rollback()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'rollback', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getClassMetadata', array('className' => $className), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'createQuery', array('dql' => $dql), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'createNamedQuery', array('name' => $name), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'createQueryBuilder', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'flush', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'clear', array('entityName' => $entityName), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->clear($entityName);
    }

    public function close()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'close', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->close();
    }

    public function persist($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'persist', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'remove', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'refresh', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'detach', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'merge', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'contains', array('entity' => $entity), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getEventManager', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getConfiguration', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'isOpen', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getUnitOfWork', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getProxyFactory', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'initializeObject', array('obj' => $obj), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'getFilters', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'isFiltersStateClean', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'hasFilters', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return $this->valueHolder84a77->hasFilters();
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

        $instance->initializer0d145 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder84a77) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84a77 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder84a77->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__get', ['name' => $name], $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        if (isset(self::$publicPropertiesb3d18[$name])) {
            return $this->valueHolder84a77->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84a77;

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

        $targetObject = $this->valueHolder84a77;
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
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84a77;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder84a77;
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
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__isset', array('name' => $name), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84a77;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder84a77;
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
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__unset', array('name' => $name), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84a77;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder84a77;
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
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__clone', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        $this->valueHolder84a77 = clone $this->valueHolder84a77;
    }

    public function __sleep()
    {
        $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, '__sleep', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;

        return array('valueHolder84a77');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0d145 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0d145;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0d145 && ($this->initializer0d145->__invoke($valueHolder84a77, $this, 'initializeProxy', array(), $this->initializer0d145) || 1) && $this->valueHolder84a77 = $valueHolder84a77;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84a77;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84a77;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
