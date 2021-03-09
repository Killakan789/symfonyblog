<?php

namespace ContainerKubo6gp;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder060ba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerf2277 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5b121 = [
        
    ];

    public function getConnection()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getConnection', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getMetadataFactory', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getExpressionBuilder', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'beginTransaction', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getCache', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getCache();
    }

    public function transactional($func)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'transactional', array('func' => $func), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->transactional($func);
    }

    public function commit()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'commit', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->commit();
    }

    public function rollback()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'rollback', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getClassMetadata', array('className' => $className), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'createQuery', array('dql' => $dql), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'createNamedQuery', array('name' => $name), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'createQueryBuilder', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'flush', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'clear', array('entityName' => $entityName), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->clear($entityName);
    }

    public function close()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'close', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->close();
    }

    public function persist($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'persist', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'remove', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'refresh', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'detach', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'merge', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getRepository', array('entityName' => $entityName), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'contains', array('entity' => $entity), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getEventManager', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getConfiguration', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'isOpen', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getUnitOfWork', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getProxyFactory', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'initializeObject', array('obj' => $obj), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'getFilters', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'isFiltersStateClean', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'hasFilters', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return $this->valueHolder060ba->hasFilters();
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

        $instance->initializerf2277 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder060ba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder060ba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder060ba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__get', ['name' => $name], $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        if (isset(self::$publicProperties5b121[$name])) {
            return $this->valueHolder060ba->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder060ba;

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

        $targetObject = $this->valueHolder060ba;
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
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder060ba;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder060ba;
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
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__isset', array('name' => $name), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder060ba;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder060ba;
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
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__unset', array('name' => $name), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder060ba;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder060ba;
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
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__clone', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        $this->valueHolder060ba = clone $this->valueHolder060ba;
    }

    public function __sleep()
    {
        $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, '__sleep', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;

        return array('valueHolder060ba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerf2277 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerf2277;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerf2277 && ($this->initializerf2277->__invoke($valueHolder060ba, $this, 'initializeProxy', array(), $this->initializerf2277) || 1) && $this->valueHolder060ba = $valueHolder060ba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder060ba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder060ba;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
