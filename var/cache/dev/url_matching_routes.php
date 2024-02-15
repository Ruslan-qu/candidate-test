<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/calculate-price' => [[['_route' => 'calculate-price', '_controller' => 'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePrice'], null, ['POST' => 0], null, false, false, null]],
        '/calculate-price1' => [[['_route' => 'calculate-price1', '_controller' => 'App\\Controller\\Application\\ApplicationController::CalculatePrice'], null, null, null, false, false, null]],
        '/purchase1' => [[['_route' => 'purchase1', '_controller' => 'App\\Controller\\Application\\ApplicationController::Purchase'], null, null, null, false, false, null]],
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
                .'|/purchase/product/([^/]++)/taxNumber/([^/]++)/(?'
                    .'|couponCode/([^/]++)/paymentProcessor/([^/]++)(*:101)'
                    .'|paymentProcessor/([^/]++)(*:134)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:174)'
                    .'|wdt/([^/]++)(*:194)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:240)'
                            .'|router(*:254)'
                            .'|exception(?'
                                .'|(*:274)'
                                .'|\\.css(*:287)'
                            .')'
                        .')'
                        .'|(*:297)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        101 => [[['_route' => 'app_api_endpointpurchase_purchasewithacoupon', '_controller' => 'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithACoupon'], ['product', 'taxNumber', 'couponCode', 'paymentProcessor'], null, null, false, true, null]],
        134 => [[['_route' => 'app_api_endpointpurchase_purchasewithoutcoupon', '_controller' => 'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithoutCoupon'], ['product', 'taxNumber', 'paymentProcessor'], null, null, false, true, null]],
        174 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        194 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        240 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        254 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        274 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        287 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        297 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
