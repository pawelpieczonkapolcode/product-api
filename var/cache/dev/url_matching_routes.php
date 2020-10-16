<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/product' => [
            [['_route' => 'app_product_getproducts', '_controller' => 'App\\Controller\\ProductController::getProducts'], null, ['GET' => 0], null, false, false, null],
            [['_route' => 'app_product_createproduct', '_controller' => 'App\\Controller\\ProductController::createProduct'], null, ['POST' => 0], null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/product/([^/]++)(?'
                    .'|(*:62)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        62 => [
            [['_route' => 'app_product_getproduct', '_controller' => 'App\\Controller\\ProductController::getProduct'], ['productId'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_product_deleteproduct', '_controller' => 'App\\Controller\\ProductController::deleteProduct'], ['productId'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'app_product_updateproduct', '_controller' => 'App\\Controller\\ProductController::updateProduct'], ['productId'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
