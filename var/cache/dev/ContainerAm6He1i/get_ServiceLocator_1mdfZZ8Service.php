<?php

namespace ContainerAm6He1i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1mdfZZ8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1mdfZZ8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1mdfZZ8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'stock' => ['privates', '.errored..service_locator.1mdfZZ8.App\\Entity\\Stock', NULL, 'Cannot autowire service ".service_locator.1mdfZZ8": it references class "App\\Entity\\Stock" but no such service exists.'],
        ], [
            'stock' => 'App\\Entity\\Stock',
        ]);
    }
}