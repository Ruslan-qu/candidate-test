<?php

namespace Container4Pd54ZD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Y8gu60HService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.y8gu60H' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.y8gu60H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Application\\ApplicationController::CalculatePrice' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController::Purchase' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Application\\ApplicationController:CalculatePrice' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController:Purchase' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Application\\ApplicationController::CalculatePrice' => '?',
            'App\\Controller\\Application\\ApplicationController::Purchase' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Application\\ApplicationController:CalculatePrice' => '?',
            'App\\Controller\\Application\\ApplicationController:Purchase' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}