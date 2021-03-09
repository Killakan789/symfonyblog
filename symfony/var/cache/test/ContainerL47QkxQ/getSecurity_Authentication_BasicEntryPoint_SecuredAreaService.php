<?php

namespace ContainerL47QkxQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authentication_BasicEntryPoint_SecuredAreaService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authentication.basic_entry_point.secured_area' shared service.
     *
     * @return \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/BasicAuthenticationEntryPoint.php';

        return $container->privates['security.authentication.basic_entry_point.secured_area'] = new \Symfony\Component\Security\Http\EntryPoint\BasicAuthenticationEntryPoint('Secured Area');
    }
}