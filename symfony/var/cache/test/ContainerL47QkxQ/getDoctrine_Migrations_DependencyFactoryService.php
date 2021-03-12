<?php

namespace ContainerL47QkxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_DependencyFactoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.dependency_factory' shared service.
     *
     * @return \Doctrine\Migrations\DependencyFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/migrations/lib/Doctrine/Migrations/DependencyFactory.php';

        return $container->privates['doctrine.migrations.dependency_factory'] = \Doctrine\Migrations\DependencyFactory::fromEntityManager(($container->privates['doctrine.migrations.configuration_loader'] ?? $container->load('getDoctrine_Migrations_ConfigurationLoaderService')), ($container->privates['doctrine.migrations.em_loader'] ?? $container->load('getDoctrine_Migrations_EmLoaderService')), ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
