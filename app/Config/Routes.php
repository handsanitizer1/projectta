<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Pages Front End
$routes->get('/', 'Pages::landing');
$routes->get('/login', 'Pages::loginPage');
$routes->get('/register', 'Pages::registerPage');
$routes->get('/home', 'Pages::home');

$routes->get('/employee-home', 'Pages::employeeHome');
//$routes->get('/', 'Home::index'); //

$routes->get('/admin-home', 'Pages::adminHome');
$routes->get('/add-event', 'Pages::addEvent');
$routes->get('/edit-event/(:any)', 'Pages::editEvent/$1');
$routes->get('/user-list', 'Admin::userList');
$routes->get('/event-list', 'Admin::eventList');
$routes->get('/employee-list', 'Admin::employeeList');

// - Restful API - //

// - Auth - //
$routes->post('/api/login', 'Auth::login'); //
$routes->post('/api/register', 'Auth::register'); //
$routes->get('logout', 'Auth::logout'); //
$routes->post('/api/editProcess', 'User::editData');
$routes->post('/api/addEventProcess', 'Admin::addEvent');


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
