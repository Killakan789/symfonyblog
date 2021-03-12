<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [
            [['_route' => 'indexadmin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null],
            [['_route' => 'index_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/' => [
            [['_route' => 'app_main_main', '_controller' => 'App\\Controller\\MainController::main'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\MainController::index'], null, ['GET' => 0], null, false, false, null],
        ],
        '/blog' => [
            [['_route' => 'app_main_blog', '_controller' => 'App\\Controller\\MainController::blog'], null, null, null, false, false, null],
            [['_route' => 'blog', '_controller' => 'App\\Controller\\MainController::blog'], null, ['GET' => 0], null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [
            [['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
            [['_route' => 'login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null],
        ],
        '/logout' => [
            [['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null],
            [['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0, 'POST' => 1], null, false, false, null],
        ],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\SecurityController::apiLogin'], null, null, null, false, false, null]],
        '/api/logout' => [[['_route' => 'api_logout', '_controller' => 'App\\Controller\\SecurityController::apiLogout'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::admin_dashboard'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/blog/([^/]++)(?'
                    .'|(*:24)'
                    .'|/([^/]++)(?'
                        .'|(*:43)'
                        .'|(*:50)'
                    .')'
                    .'|(*:58)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => 'app_main_blog_category', '_controller' => 'App\\Controller\\MainController::blog_category'], ['category'], null, null, false, true, null]],
        43 => [[['_route' => 'app_main_blog_detail', '_controller' => 'App\\Controller\\MainController::blog_detail'], ['category', 'id'], null, null, false, true, null]],
        50 => [[['_route' => 'blog_detail', '_controller' => 'App\\Controller\\MainController::blog_detail'], ['category', 'title'], ['GET' => 0], null, false, true, null]],
        58 => [
            [['_route' => 'blog_category', '_controller' => 'App\\Controller\\MainController::blog_category'], ['category'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
