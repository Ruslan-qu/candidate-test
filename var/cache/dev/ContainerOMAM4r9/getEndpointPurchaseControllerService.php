<?php

namespace ContainerOMAM4r9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEndpointPurchaseControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EndpointPurchase\EndpointPurchaseController' shared autowired service.
     *
     * @return \App\Controller\EndpointPurchase\EndpointPurchaseController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EndpointPurchase/EndpointPurchaseController.php';

        $container->services['App\\Controller\\EndpointPurchase\\EndpointPurchaseController'] = $instance = new \App\Controller\EndpointPurchase\EndpointPurchaseController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\EndpointPurchase\\EndpointPurchaseController', $container));

        return $instance;
    }
}