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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/author/show' => [[['_route' => 'app_author_show', '_controller' => 'App\\Controller\\AuthorController::showAuthor'], null, null, null, false, false, null]],
        '/author/list' => [[['_route' => 'app_author_list', '_controller' => 'App\\Controller\\AuthorController::listAuthors'], null, null, null, false, false, null]],
        '/crud/author/list' => [[['_route' => 'app_crud_author', '_controller' => 'App\\Controller\\CrudAuthorController::list'], null, null, null, false, false, null]],
        '/crud/author/new' => [[['_route' => 'app_crud_author_new', '_controller' => 'App\\Controller\\CrudAuthorController::newAuthor'], null, null, null, false, false, null]],
        '/crud/author/search-by-library' => [[['_route' => 'app_crud_author_search_by_library', '_controller' => 'App\\Controller\\CrudAuthorController::searchByLibrary'], null, null, null, false, false, null]],
        '/crud/book/list' => [[['_route' => 'app_crud_book_list', '_controller' => 'App\\Controller\\CrudBookController::list'], null, null, null, false, false, null]],
        '/crud/book/new' => [[['_route' => 'app_crud_book_new', '_controller' => 'App\\Controller\\CrudBookController::newBook'], null, null, null, false, false, null]],
        '/crud/library/list' => [[['_route' => 'app_crud_library_list', '_controller' => 'App\\Controller\\CrudLibraryController::list'], null, null, null, false, false, null]],
        '/crud/library/new' => [[['_route' => 'app_crud_library_new', '_controller' => 'App\\Controller\\CrudLibraryController::newLibrary'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, true, false, null]],
        '/home/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\HomeController::index1'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/crud/(?'
                    .'|author/(?'
                        .'|search/([^/]++)(*:236)'
                        .'|delete/([^/]++)(*:259)'
                        .'|update/([^/]++)(*:282)'
                    .')'
                    .'|book/(?'
                        .'|search/([^/]++)(*:314)'
                        .'|delete/([^/]++)(*:337)'
                        .'|update/([^/]++)(*:360)'
                    .')'
                    .'|library/(?'
                        .'|search/([^/]++)(*:395)'
                        .'|delete/([^/]++)(*:418)'
                        .'|update/([^/]++)(*:441)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        236 => [[['_route' => 'app_crud_author_search', '_controller' => 'App\\Controller\\CrudAuthorController::SearchByName'], ['name'], null, null, false, true, null]],
        259 => [[['_route' => 'app_crud_author_delete', '_controller' => 'App\\Controller\\CrudAuthorController::deleteAuthor'], ['id'], null, null, false, true, null]],
        282 => [[['_route' => 'app_crud_author_update', '_controller' => 'App\\Controller\\CrudAuthorController::UpdateAuthor'], ['id'], null, null, false, true, null]],
        314 => [[['_route' => 'app_crud_book_search', '_controller' => 'App\\Controller\\CrudBookController::searchByTitle'], ['title'], null, null, false, true, null]],
        337 => [[['_route' => 'app_crud_book_delete', '_controller' => 'App\\Controller\\CrudBookController::deleteBook'], ['id'], null, null, false, true, null]],
        360 => [[['_route' => 'app_crud_book_update', '_controller' => 'App\\Controller\\CrudBookController::updateBook'], ['id'], null, null, false, true, null]],
        395 => [[['_route' => 'app_crud_library_view', '_controller' => 'App\\Controller\\CrudLibraryController::SearchByName'], ['name'], null, null, false, true, null]],
        418 => [[['_route' => 'app_crud_library_delete', '_controller' => 'App\\Controller\\CrudLibraryController::deleteLibrary'], ['id'], null, null, false, true, null]],
        441 => [
            [['_route' => 'app_crud_library_update', '_controller' => 'App\\Controller\\CrudLibraryController::updateLibrary'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
