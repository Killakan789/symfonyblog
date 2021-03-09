<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/blog/([^/]++)(?'
                    .'|(*:186)'
                    .'|/([^/]++)(?'
                        .'|(*:206)'
                        .'|(*:214)'
                    .')'
                    .'|(*:223)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        186 => [[['_route' => 'app_main_blog_category', '_controller' => 'App\\Controller\\MainController::blog_category'], ['category'], null, null, false, true, null]],
        206 => [[['_route' => 'app_main_blog_detail', '_controller' => 'App\\Controller\\MainController::blog_detail'], ['category', 'id'], null, null, false, true, null]],
        214 => [[['_route' => 'blog_detail', '_controller' => 'App\\Controller\\MainController::blog_detail'], ['category', 'title'], ['GET' => 0], null, false, true, null]],
        223 => [
            [['_route' => 'blog_category', '_controller' => 'App\\Controller\\MainController::blog_category'], ['category'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
