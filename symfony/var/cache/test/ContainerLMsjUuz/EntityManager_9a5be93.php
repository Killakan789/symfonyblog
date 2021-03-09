<?php

namespace ContainerLMsjUuz;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder4a7ee = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer638de = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1893c = [
        
    ];

    public function getConnection()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getConnection', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getMetadataFactory', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getExpressionBuilder', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'beginTransaction', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getCache', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getCache();
    }

    public function transactional($func)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'transactional', array('func' => $func), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->transactional($func);
    }

    public function commit()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'commit', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->commit();
    }

    public function rollback()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'rollback', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getClassMetadata', array('className' => $className), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'createQuery', array('dql' => $dql), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'createNamedQuery', array('name' => $name), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'createQueryBuilder', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'flush', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'clear', array('entityName' => $entityName), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->clear($entityName);
    }

    public function close()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'close', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->close();
    }

    public function persist($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'persist', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'remove', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'refresh', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'detach', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'merge', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getRepository', array('entityName' => $entityName), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'contains', array('entity' => $entity), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getEventManager', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getConfiguration', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'isOpen', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getUnitOfWork', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getProxyFactory', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'initializeObject', array('obj' => $obj), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'getFilters', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'isFiltersStateClean', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'hasFilters', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return $this->valueHolder4a7ee->hasFilters();
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

        $instance->initializer638de = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder4a7ee) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder4a7ee = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder4a7ee->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__get', ['name' => $name], $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        if (isset(self::$publicProperties1893c[$name])) {
            return $this->valueHolder4a7ee->$name;
        }

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a7ee;

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

        $targetObject = $this->valueHolder4a7ee;
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
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a7ee;

            $targetObject->$name = $value; return $targetObject->$name;
            return;
        }

        $targetObject = $this->valueHolder4a7ee;
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
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__isset', array('name' => $name), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a7ee;

            return isset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4a7ee;
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
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__unset', array('name' => $name), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder4a7ee;

            unset($targetObject->$name);
            return;
        }

        $targetObject = $this->valueHolder4a7ee;
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
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__clone', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        $this->valueHolder4a7ee = clone $this->valueHolder4a7ee;
    }

    public function __sleep()
    {
        $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, '__sleep', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;

        return array('valueHolder4a7ee');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer638de = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer638de;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer638de && ($this->initializer638de->__invoke($valueHolder4a7ee, $this, 'initializeProxy', array(), $this->initializer638de) || 1) && $this->valueHolder4a7ee = $valueHolder4a7ee;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder4a7ee;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder4a7ee;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
