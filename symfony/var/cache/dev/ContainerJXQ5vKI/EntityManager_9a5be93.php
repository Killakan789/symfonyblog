<?php

namespace ContainerJXQ5vKI;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6030a = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer7c4a3 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesaa6a6 = [
        
    ];

    public function getConnection()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getConnection', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getMetadataFactory', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getExpressionBuilder', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'beginTransaction', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getCache', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getCache();
    }

    public function transactional($func)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'transactional', array('func' => $func), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->transactional($func);
    }

    public function commit()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'commit', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->commit();
    }

    public function rollback()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'rollback', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getClassMetadata', array('className' => $className), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'createQuery', array('dql' => $dql), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'createNamedQuery', array('name' => $name), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'createQueryBuilder', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'flush', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'clear', array('entityName' => $entityName), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->clear($entityName);
    }

    public function close()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'close', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->close();
    }

    public function persist($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'persist', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'remove', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'refresh', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'detach', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'merge', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'contains', array('entity' => $entity), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getEventManager', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getConfiguration', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'isOpen', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getUnitOfWork', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getProxyFactory', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'initializeObject', array('obj' => $obj), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'getFilters', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'isFiltersStateClean', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'hasFilters', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return $this->valueHolder6030a->hasFilters();
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

        $instance->initializer7c4a3 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6030a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6030a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6030a->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__get', ['name' => $name], $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        if (isset(self::$publicPropertiesaa6a6[$name])) {
            return $this->valueHolder6030a->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6030a;

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

        $targetObject = $this->valueHolder6030a;
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
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6030a;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder6030a;
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
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__isset', array('name' => $name), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6030a;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6030a;
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
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__unset', array('name' => $name), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6030a;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder6030a;
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
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__clone', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        $this->valueHolder6030a = clone $this->valueHolder6030a;
    }

    public function __sleep()
    {
        $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, '__sleep', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;

        return array('valueHolder6030a');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer7c4a3 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer7c4a3;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer7c4a3 && ($this->initializer7c4a3->__invoke($valueHolder6030a, $this, 'initializeProxy', array(), $this->initializer7c4a3) || 1) && $this->valueHolder6030a = $valueHolder6030a;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6030a;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6030a;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
