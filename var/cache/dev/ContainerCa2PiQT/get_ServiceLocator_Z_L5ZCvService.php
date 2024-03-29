<?php

namespace ContainerCa2PiQT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z_L5ZCvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z.l5ZCv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z.l5ZCv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'calculatePriceServiceInterface' => ['privates', 'App\\Service\\CalculatePriceService', 'getCalculatePriceServiceService', true],
            'couponsRepository' => ['privates', 'App\\Repository\\CouponsRepository', 'getCouponsRepositoryService', true],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
            'taxesRepository' => ['privates', 'App\\Repository\\TaxesRepository', 'getTaxesRepositoryService', true],
        ], [
            'calculatePriceServiceInterface' => '?',
            'couponsRepository' => 'App\\Repository\\CouponsRepository',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
            'taxesRepository' => 'App\\Repository\\TaxesRepository',
        ]);
    }
}
