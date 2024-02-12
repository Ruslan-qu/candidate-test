<?php

namespace ContainerGxOu26J;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IGfuHGdService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.IGfuHGd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.IGfuHGd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePriceWithACoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePriceWithoutCoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithACoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithoutCoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController::CalculatePrice' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController::Purchase' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Api\\EndpointCalculatePriceController:CalculatePriceWithACoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointCalculatePriceController:CalculatePriceWithoutCoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointPurchaseController:PurchaseWithACoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Api\\EndpointPurchaseController:PurchaseWithoutCoupon' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController:CalculatePrice' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'App\\Controller\\Application\\ApplicationController:Purchase' => ['privates', '.service_locator.6B_ZjHa', 'get_ServiceLocator_6BZjHaService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePriceWithACoupon' => '?',
            'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePriceWithoutCoupon' => '?',
            'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithACoupon' => '?',
            'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithoutCoupon' => '?',
            'App\\Controller\\Application\\ApplicationController::CalculatePrice' => '?',
            'App\\Controller\\Application\\ApplicationController::Purchase' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Api\\EndpointCalculatePriceController:CalculatePriceWithACoupon' => '?',
            'App\\Controller\\Api\\EndpointCalculatePriceController:CalculatePriceWithoutCoupon' => '?',
            'App\\Controller\\Api\\EndpointPurchaseController:PurchaseWithACoupon' => '?',
            'App\\Controller\\Api\\EndpointPurchaseController:PurchaseWithoutCoupon' => '?',
            'App\\Controller\\Application\\ApplicationController:CalculatePrice' => '?',
            'App\\Controller\\Application\\ApplicationController:Purchase' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}