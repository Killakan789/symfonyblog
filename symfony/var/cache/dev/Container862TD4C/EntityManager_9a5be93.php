<?php

namespace Container862TD4C;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder38738 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeraf77d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescec71 = [
        
    ];

    public function getConnection()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getConnection', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getMetadataFactory', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getExpressionBuilder', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'beginTransaction', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getCache', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getCache();
    }

    public function transactional($func)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'transactional', array('func' => $func), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->transactional($func);
    }

    public function commit()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'commit', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->commit();
    }

    public function rollback()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'rollback', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getClassMetadata', array('className' => $className), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'createQuery', array('dql' => $dql), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'createNamedQuery', array('name' => $name), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'createQueryBuilder', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'flush', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'clear', array('entityName' => $entityName), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->clear($entityName);
    }

    public function close()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'close', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->close();
    }

    public function persist($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'persist', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'remove', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'refresh', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'detach', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'merge', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getRepository', array('entityName' => $entityName), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'contains', array('entity' => $entity), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getEventManager', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getConfiguration', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'isOpen', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getUnitOfWork', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getProxyFactory', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'initializeObject', array('obj' => $obj), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'getFilters', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'isFiltersStateClean', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'hasFilters', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return $this->valueHolder38738->hasFilters();
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

        $instance->initializeraf77d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder38738) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder38738 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder38738->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__get', ['name' => $name], $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        if (isset(self::$publicPropertiescec71[$name])) {
            return $this->valueHolder38738->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38738;

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

        $targetObject = $this->valueHolder38738;
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
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38738;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder38738;
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
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__isset', array('name' => $name), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38738;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder38738;
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
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__unset', array('name' => $name), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder38738;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder38738;
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
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__clone', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        $this->valueHolder38738 = clone $this->valueHolder38738;
    }

    public function __sleep()
    {
        $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, '__sleep', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;

        return array('valueHolder38738');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeraf77d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeraf77d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeraf77d && ($this->initializeraf77d->__invoke($valueHolder38738, $this, 'initializeProxy', array(), $this->initializeraf77d) || 1) && $this->valueHolder38738 = $valueHolder38738;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder38738;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder38738;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
