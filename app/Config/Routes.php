<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/register', 'Home::register');
// $routes->get('/admin', 'AdminController::index',['filter'=>'authGuard']);
$routes->group('/admin', ['filter'=>'authGuard'], function($routes){
    $routes->add('','AdminController::index');
    $routes->add('users', 'AdminController::users');
    $routes->group('posts', function($routes){
        $routes->add('', 'AdminController::posts');
        $routes->add('create', 'AdminController::create');
        $routes->add('delete/(:num)', 'AdminController::delete/$1');
        $routes->add('update/(:num)', 'AdminController::updatePage/$1');
        $routes->post('update/(:num)', 'AdminController::update/$1');
        $routes->add('view/(:num)', 'AdminController::view/$1');
    });
});
$routes->get('/profile', 'AdminController::profile');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
