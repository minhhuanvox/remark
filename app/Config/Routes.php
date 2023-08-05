<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
// $routes->setDefaultController('Home');
// $routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'User\HomeController::index');
$routes->get('/index', 'User\HomeController::index');
$routes->get('error/404', function () {
    return view('errors/html/error_404');
});
$routes->get('login', 'Admin\LoginController::index');
$routes->post('login', 'Admin\LoginController::login');

$routes->group('admin', ['filter' => 'adminFilter'], function ($routes) {
    $routes->get('home', 'Admin\HomeController::index');

    $routes->get('logout', 'Admin\LoginController::logout');
    $routes->group('remark', function ($routes) {
        $routes->get('list', 'Admin\RemarkController::list');
        $routes->get('add', 'Admin\RemarkController::add');
        $routes->post('create', 'Admin\RemarkController::create');
        $routes->get('detail/(:num)', 'Admin\RemarkController::detail/$1');
        $routes->get('edit/(:num)', 'Admin\RemarkController::edit/$1');
        $routes->post('update', 'Admin\RemarkController::update');
        $routes->get('delete/(:num)', 'Admin\RemarkController::delete/$1');
    });
});
$routes->group('user', ['filter' => 'noauth'], function ($routes) {
    $routes->get('add', 'User\AddController::index');
    $routes->post('create', 'User\AddController::create');
    $routes->get('dashboard', 'User\DashboardController::index');
});
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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}