<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/calculate-price' => [[['_route' => 'calculate-price', '_controller' => 'App\\Controller\\Application\\ApplicationController::CalculatePrice'], null, null, null, false, false, null]],
        '/purchase' => [[['_route' => 'purchase', '_controller' => 'App\\Controller\\Application\\ApplicationController::Purchase'], null, null, null, false, false, null]],
        '/reset' => [[['_route' => 'reset', '_controller' => 'App\\Controller\\Application\\ApplicationController::ResetPart'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'home_page', '_controller' => 'App\\Controller\\Application\\HomePageController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomePageController::homepage'], null, null, null, false, false, null],
        ],
        '/health-check' => [[['_route' => 'health_check', '_controller' => 'App\\Controller\\Test\\HealthCheckAction'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/calculate\\-price/product/([^/]++)/taxNumber/([^/]++)(?'
                    .'|/couponCode/([^/]++)(*:83)'
                    .'|(*:90)'
                .')'
                .'|/purchase/product/([^/]++)/taxNumber/([^/]++)/(?'
                    .'|couponCode/([^/]++)/paymentProcessor/([^/]++)(*:192)'
                    .'|paymentProcessor/([^/]++)(*:225)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:265)'
                    .'|wdt/([^/]++)(*:285)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:331)'
                            .'|router(*:345)'
                            .'|exception(?'
                                .'|(*:365)'
                                .'|\\.css(*:378)'
                            .')'
                        .')'
                        .'|(*:388)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        83 => [[['_route' => 'app_endpointcalculateprice_endpointcalculateprice_calculatepricewithacoupon', '_controller' => 'App\\Controller\\EndpointCalculatePrice\\EndpointCalculatePriceController::CalculatePriceWithACoupon'], ['product', 'taxNumber', 'couponCode'], null, null, false, true, null]],
        90 => [[['_route' => 'app_endpointcalculateprice_endpointcalculateprice_calculatepricewithoutcoupon', '_controller' => 'App\\Controller\\EndpointCalculatePrice\\EndpointCalculatePriceController::CalculatePriceWithoutCoupon'], ['product', 'taxNumber'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        192 => [[['_route' => 'app_endpointpurchase_endpointpurchase_purchasewithacoupon', '_controller' => 'App\\Controller\\EndpointPurchase\\EndpointPurchaseController::PurchaseWithACoupon'], ['product', 'taxNumber', 'couponCode', 'paymentProcessor'], null, null, false, true, null]],
        225 => [[['_route' => 'app_endpointpurchase_endpointpurchase_purchasewithoutcoupon', '_controller' => 'App\\Controller\\EndpointPurchase\\EndpointPurchaseController::PurchaseWithoutCoupon'], ['product', 'taxNumber', 'paymentProcessor'], null, null, false, true, null]],
        265 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        285 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        331 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        345 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        365 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        378 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        388 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
