<?php

namespace ContainerU0rND5i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A64LFRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.a64LFR_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.a64LFR_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'livre' => ['privates', '.errored..service_locator.a64LFR_.App\\Entity\\Livre', NULL, 'Cannot autowire service ".service_locator.a64LFR_": it references class "App\\Entity\\Livre" but no such service exists.'],
        ], [
            'livre' => 'App\\Entity\\Livre',
        ]);
    }
}