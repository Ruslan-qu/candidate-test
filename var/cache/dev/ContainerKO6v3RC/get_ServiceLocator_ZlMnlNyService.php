<?php

namespace ContainerKO6v3RC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZlMnlNyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zlMnlNy' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zlMnlNy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calculatePriceServiceInterface' => ['privates', 'App\\Service\\CalculatePriceService', 'getCalculatePriceServiceService', true],
            'couponsRepository' => ['privates', 'App\\Repository\\CouponsRepository', 'getCouponsRepositoryService', true],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
            'purchaseServiceInterface' => ['privates', 'App\\Service\\PurchaseService', 'getPurchaseServiceService', true],
            'taxesRepository' => ['privates', 'App\\Repository\\TaxesRepository', 'getTaxesRepositoryService', true],
        ], [
            'calculatePriceServiceInterface' => '?',
            'couponsRepository' => 'App\\Repository\\CouponsRepository',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
            'purchaseServiceInterface' => '?',
            'taxesRepository' => 'App\\Repository\\TaxesRepository',
        ]);
    }
}
