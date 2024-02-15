<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'calculate-price' => [[], ['_controller' => 'App\\Controller\\Api\\EndpointCalculatePriceController::CalculatePrice'], [], [['text', '/api/calculate-price']], [], [], []],
    'app_api_endpointpurchase_purchasewithacoupon' => [['product', 'taxNumber', 'couponCode', 'paymentProcessor'], ['_controller' => 'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithACoupon'], [], [['variable', '/', '[^/]++', 'paymentProcessor', true], ['text', '/paymentProcessor'], ['variable', '/', '[^/]++', 'couponCode', true], ['text', '/couponCode'], ['variable', '/', '[^/]++', 'taxNumber', true], ['text', '/taxNumber'], ['variable', '/', '[^/]++', 'product', true], ['text', '/purchase/product']], [], [], []],
    'app_api_endpointpurchase_purchasewithoutcoupon' => [['product', 'taxNumber', 'paymentProcessor'], ['_controller' => 'App\\Controller\\Api\\EndpointPurchaseController::PurchaseWithoutCoupon'], [], [['variable', '/', '[^/]++', 'paymentProcessor', true], ['text', '/paymentProcessor'], ['variable', '/', '[^/]++', 'taxNumber', true], ['text', '/taxNumber'], ['variable', '/', '[^/]++', 'product', true], ['text', '/purchase/product']], [], [], []],
    'calculate-price1' => [[], ['_controller' => 'App\\Controller\\Application\\ApplicationController::CalculatePrice'], [], [['text', '/calculate-price1']], [], [], []],
    'purchase1' => [[], ['_controller' => 'App\\Controller\\Application\\ApplicationController::Purchase'], [], [['text', '/purchase1']], [], [], []],
    'reset' => [[], ['_controller' => 'App\\Controller\\Application\\ApplicationController::ResetPart'], [], [['text', '/reset']], [], [], []],
    'home_page' => [[], ['_controller' => 'App\\Controller\\Application\\HomePageController::index'], [], [['text', '/']], [], [], []],
    'health_check' => [[], ['_controller' => 'App\\Controller\\Test\\HealthCheckAction'], [], [['text', '/health-check']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomePageController::homepage'], [], [['text', '/']], [], [], []],
];
