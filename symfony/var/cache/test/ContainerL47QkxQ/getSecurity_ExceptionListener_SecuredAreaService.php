<?php

namespace ContainerL47QkxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ExceptionListener_SecuredAreaService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.exception_listener.secured_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php';

        return $container->privates['security.exception_listener.secured_area'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->services['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->privates['security.authentication.trust_resolver'] ?? ($container->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver())), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'secured_area', ($container->privates['security.authentication.basic_entry_point.secured_area'] ?? ($container->privates['security.authentication.basic_entry_point.secured_area'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area'))), NULL, NULL, ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), false);
    }
}
