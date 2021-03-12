<?php

namespace ContainerPpsxzC5;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldereba58 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera2955 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesecc15 = [
        
    ];

    public function getConnection()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getConnection', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getMetadataFactory', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getExpressionBuilder', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'beginTransaction', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getCache', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getCache();
    }

    public function transactional($func)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'transactional', array('func' => $func), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->transactional($func);
    }

    public function commit()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'commit', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->commit();
    }

    public function rollback()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'rollback', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getClassMetadata', array('className' => $className), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'createQuery', array('dql' => $dql), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'createNamedQuery', array('name' => $name), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'createQueryBuilder', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'flush', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'clear', array('entityName' => $entityName), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->clear($entityName);
    }

    public function close()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'close', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->close();
    }

    public function persist($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'persist', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'remove', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'refresh', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'detach', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'merge', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getRepository', array('entityName' => $entityName), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'contains', array('entity' => $entity), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getEventManager', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getConfiguration', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'isOpen', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getUnitOfWork', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getProxyFactory', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'initializeObject', array('obj' => $obj), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'getFilters', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'isFiltersStateClean', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'hasFilters', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return $this->valueHoldereba58->hasFilters();
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

        $instance->initializera2955 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldereba58) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldereba58 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldereba58->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__get', ['name' => $name], $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        if (isset(self::$publicPropertiesecc15[$name])) {
            return $this->valueHoldereba58->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereba58;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldereba58;
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
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereba58;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHoldereba58;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value; return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__isset', array('name' => $name), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereba58;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereba58;
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
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__unset', array('name' => $name), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldereba58;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHoldereba58;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __clone()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__clone', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        $this->valueHoldereba58 = clone $this->valueHoldereba58;
    }

    public function __sleep()
    {
        $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, '__sleep', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;

        return array('valueHoldereba58');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera2955 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera2955;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera2955 && ($this->initializera2955->__invoke($valueHoldereba58, $this, 'initializeProxy', array(), $this->initializera2955) || 1) && $this->valueHoldereba58 = $valueHoldereba58;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldereba58;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldereba58;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
