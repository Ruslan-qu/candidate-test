<?php

namespace ContainerOMAM4r9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEndpointCalculatePriceControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EndpointCalculatePrice\EndpointCalculatePriceController' shared autowired service.
     *
     * @return \App\Controller\EndpointCalculatePrice\EndpointCalculatePriceController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EndpointCalculatePrice/EndpointCalculatePriceController.php';

        $container->services['App\\Controller\\EndpointCalculatePrice\\EndpointCalculatePriceController'] = $instance = new \App\Controller\EndpointCalculatePrice\EndpointCalculatePriceController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\EndpointCalculatePrice\\EndpointCalculatePriceController', $container));

        return $instance;
    }
}
