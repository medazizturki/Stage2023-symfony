<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach_index', '_controller' => 'App\\Controller\\CoachController::index'], null, ['GET' => 0], null, true, false, null]],
        '/coach/new' => [[['_route' => 'app_coach_new', '_controller' => 'App\\Controller\\CoachController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/acceuil' => [[['_route' => 'app_acceuil', '_controller' => 'App\\Controller\\HomeController::acceuil'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/registerAdmin' => [[['_route' => 'app_registerAdmin', '_controller' => 'App\\Controller\\RegistrationController::registerAdmin'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/votre/action/symfony' => [[['_route' => 'votre_action_symfony', '_controller' => 'App\\Controller\\UserController::votreActionSymfony'], null, ['POST' => 0], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/([^/]++)/edit(*:25)'
                .'|/coach/([^/]++)(?'
                    .'|(*:50)'
                    .'|/edit(*:62)'
                    .'|(*:69)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:97)'
                    .'|/edit(*:109)'
                    .'|(*:117)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:162)'
                .'|/user/([^/]++)(?'
                    .'|(*:187)'
                    .'|/edit(*:200)'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:237)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:276)'
                    .'|wdt/([^/]++)(*:296)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:342)'
                            .'|router(*:356)'
                            .'|exception(?'
                                .'|(*:376)'
                                .'|\\.css(*:389)'
                            .')'
                        .')'
                        .'|(*:399)'
                    .')'
                .')'
                .'|/fetch\\-product\\-details/([^/]++)(*:442)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        25 => [[['_route' => 'api_reservation_edit', '_controller' => 'App\\Controller\\ApiController::majReservation'], ['id'], ['PUT' => 0], null, false, false, null]],
        50 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        62 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        69 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\CoachController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        97 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        109 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        117 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        162 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        187 => [
            [['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        200 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        237 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        276 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        296 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        342 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        356 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        376 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        389 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        399 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        442 => [
            [['_route' => 'fetch_product_details', '_controller' => 'App\\Controller\\ProductController::fetchProductDetails'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
