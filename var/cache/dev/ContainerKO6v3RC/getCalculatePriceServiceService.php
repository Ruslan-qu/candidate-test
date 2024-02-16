<?php

namespace ContainerKO6v3RC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalculatePriceServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CalculatePriceService' shared autowired service.
     *
     * @return \App\Service\CalculatePriceService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CalculatePriceServiceInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CalculatePriceService.php';

        return $container->privates['App\\Service\\CalculatePriceService'] = new \App\Service\CalculatePriceService();
    }
}