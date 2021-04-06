<?php

namespace ContainerU0rND5i;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__0haxjService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..0haxj_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..0haxj_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::dashboard' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\AdminController::delete_livre' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\AdminController::delete_stock' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\CategorieController::delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController::edit' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.2Iz0l6.', 'get_ServiceLocator_2Iz0l6_Service', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\FiliereController::delete' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\FiliereController::edit' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\FiliereController::index' => ['privates', '.service_locator.vCt9qy4', 'get_ServiceLocator_VCt9qy4Service', true],
            'App\\Controller\\FiliereController::show' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\LivreController::delete' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\LivreController::edit' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\LivreController::index' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController::show' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YT8XVZ7', 'get_ServiceLocator_YT8XVZ7Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SiteController::delete' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\SiteController::edit' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\SiteController::index' => ['privates', '.service_locator.d8E_0J6', 'get_ServiceLocator_D8E0J6Service', true],
            'App\\Controller\\SiteController::show' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\StockController::delete' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\StockController::edit' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\StockController::index' => ['privates', '.service_locator.WEcIq80', 'get_ServiceLocator_WEcIq80Service', true],
            'App\\Controller\\StockController::show' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\AdminController:dashboard' => ['privates', '.service_locator.OC2AG.K', 'get_ServiceLocator_OC2AG_KService', true],
            'App\\Controller\\AdminController:delete_livre' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\AdminController:delete_stock' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\CategorieController:delete' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController:edit' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.2Iz0l6.', 'get_ServiceLocator_2Iz0l6_Service', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.Z8xh0Z9', 'get_ServiceLocator_Z8xh0Z9Service', true],
            'App\\Controller\\FiliereController:delete' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\FiliereController:edit' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\FiliereController:index' => ['privates', '.service_locator.vCt9qy4', 'get_ServiceLocator_VCt9qy4Service', true],
            'App\\Controller\\FiliereController:show' => ['privates', '.service_locator.scg7lsC', 'get_ServiceLocator_Scg7lsCService', true],
            'App\\Controller\\LivreController:delete' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\LivreController:edit' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\LivreController:index' => ['privates', '.service_locator.fgyhf2I', 'get_ServiceLocator_Fgyhf2IService', true],
            'App\\Controller\\LivreController:show' => ['privates', '.service_locator.a64LFR_', 'get_ServiceLocator_A64LFRService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YT8XVZ7', 'get_ServiceLocator_YT8XVZ7Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Controller\\SiteController:delete' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\SiteController:edit' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\SiteController:index' => ['privates', '.service_locator.d8E_0J6', 'get_ServiceLocator_D8E0J6Service', true],
            'App\\Controller\\SiteController:show' => ['privates', '.service_locator.1SOZ5Ms', 'get_ServiceLocator_1SOZ5MsService', true],
            'App\\Controller\\StockController:delete' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\StockController:edit' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\StockController:index' => ['privates', '.service_locator.WEcIq80', 'get_ServiceLocator_WEcIq80Service', true],
            'App\\Controller\\StockController:show' => ['privates', '.service_locator.1mdfZZ8', 'get_ServiceLocator_1mdfZZ8Service', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator..Ae5NXw', 'get_ServiceLocator__Ae5NXwService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.ch4Jgvl', 'get_ServiceLocator_Ch4JgvlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\AdminController::dashboard' => '?',
            'App\\Controller\\AdminController::delete_livre' => '?',
            'App\\Controller\\AdminController::delete_stock' => '?',
            'App\\Controller\\CategorieController::delete' => '?',
            'App\\Controller\\CategorieController::edit' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\FiliereController::delete' => '?',
            'App\\Controller\\FiliereController::edit' => '?',
            'App\\Controller\\FiliereController::index' => '?',
            'App\\Controller\\FiliereController::show' => '?',
            'App\\Controller\\LivreController::delete' => '?',
            'App\\Controller\\LivreController::edit' => '?',
            'App\\Controller\\LivreController::index' => '?',
            'App\\Controller\\LivreController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SiteController::delete' => '?',
            'App\\Controller\\SiteController::edit' => '?',
            'App\\Controller\\SiteController::index' => '?',
            'App\\Controller\\SiteController::show' => '?',
            'App\\Controller\\StockController::delete' => '?',
            'App\\Controller\\StockController::edit' => '?',
            'App\\Controller\\StockController::index' => '?',
            'App\\Controller\\StockController::show' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:dashboard' => '?',
            'App\\Controller\\AdminController:delete_livre' => '?',
            'App\\Controller\\AdminController:delete_stock' => '?',
            'App\\Controller\\CategorieController:delete' => '?',
            'App\\Controller\\CategorieController:edit' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\FiliereController:delete' => '?',
            'App\\Controller\\FiliereController:edit' => '?',
            'App\\Controller\\FiliereController:index' => '?',
            'App\\Controller\\FiliereController:show' => '?',
            'App\\Controller\\LivreController:delete' => '?',
            'App\\Controller\\LivreController:edit' => '?',
            'App\\Controller\\LivreController:index' => '?',
            'App\\Controller\\LivreController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SiteController:delete' => '?',
            'App\\Controller\\SiteController:edit' => '?',
            'App\\Controller\\SiteController:index' => '?',
            'App\\Controller\\SiteController:show' => '?',
            'App\\Controller\\StockController:delete' => '?',
            'App\\Controller\\StockController:edit' => '?',
            'App\\Controller\\StockController:index' => '?',
            'App\\Controller\\StockController:show' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}