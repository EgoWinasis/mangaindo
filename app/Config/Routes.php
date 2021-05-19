<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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

// home
$routes->get('/', 'Pages::index');
$routes->get('/home', 'Pages::index');
$routes->get('/home/(:num)', 'Pages::index/$1');
// list
$routes->get('/pages/list', 'Pages::list');
$routes->get('/pages/list/(:any)', 'Pages::list');
// detail list
$routes->get('/genres/(:segment)', 'Genres::detail/$1');
$routes->get('/genres/(:segment)/(:num)', 'Genres::detail/$1/$2');
// about
$routes->get('/pages/about', 'Pages::about');
$routes->get('/pages/about/(:any)', 'Pages::about');
// contact us
$routes->get('/pages/contact', 'Pages::contact');
$routes->get('/pages/contact/(:any)', 'Pages::contact');

// detail manga
$routes->get('/detail-manga/(:segment)', 'Reads::index/$1');
// baca manga
$routes->get('/baca-manga/(:segment)', 'Reads::read/$1');


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
