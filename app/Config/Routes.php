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
$routes->setDefaultController('Site');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(TRUE);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

/*----- Login Page -----*/
$routes->get('/', 'Site::getIndex');
$routes->get('site', 'Site::getIndex');
/*----- Login Page End -----*/

/*----- Dashboard Page -----*/
$routes->get('dashboard', 'Dashboard::getIndex');
$routes->get('dashboard/(:any)/resident', 'Dashboard::resident_report/$1');
$routes->get('dashboard/age', 'Dashboard::age');
$routes->get('dashboard/gender', 'Dashboard::gender');
$routes->get('dashboard/sector', 'Dashboard::sector');
$routes->get('dashboard/street', 'Dashboard::street');
$routes->get('dashboard/business', 'Dashboard::business');
$routes->get('dashboard/business_line', 'Dashboard::business_line');
/*----- Dashboard Page End -----*/


/*----- Residents Page -----*/
$routes->get('residents', 'Residents::index');
$routes->get('residents/add', 'Residents::add');
$routes->get('residents/view/(:num)', 'Residents::view/$1');
$routes->get('residents/get_names', 'Residents::get');
$routes->get('residents/report', 'Residents::report');

$routes->post('residents', 'Residents::index');
$routes->post('residents/add', 'Residents::add');
/*----- Residents Page End -----*/


/*----- Streets Page -----*/
$routes->get('streets', 'Streets::index');
/*----- Streets Page End -----*/

/*----- certificate Page -----*/
$routes->get('certificate/', 'Certificate::index');
$routes->get('certificate/add', 'Certificate::add');
$routes->get('certificate/view/(:num)', 'Certificate::view/$1');
// $routes->get('certificate/showCert/(:any)', 'Certificate::showCert/$1');

$routes->post('certificate/save', 'Certificate::save');
/*----- certificate Page End -----*/

/*----- Masterdata Page -----*/
$routes->get('masterdata', 'Masterdata::index');
$routes->get('masterdata/(:any)/page', 'Masterdata::info/$1');
$routes->get('masterdata/add/(:any)', 'Masterdata::view/$1');
$routes->get('masterdata/(:any)/(:num)/view', 'Masterdata::view/$1/$2');

$routes->post('masterdata/(:any)/new', 'Masterdata::save/$1');
$routes->post('masterdata/(:any)/(:num)/update', 'Masterdata::save/$1/$2');
$routes->post('masterdata/(:any)/delete', 'Masterdata::delete/$1');
/*----- Masterdata Page End -----*/

/*----- Property Page -----*/
$routes->get('property', 'Property::index');
$routes->get('property/add', 'Property::add');
$routes->get('property/view/(:num)', 'Property::view/$1');

$routes->post('property/add', 'Property::add');
/*----- Property Page End-----*/

/*----- Project Page -----*/
$routes->get('project', 'Project::index');
$routes->get('project/add', 'Project::add');
$routes->get('project/view/(:num)', 'Project::view/$1');
$routes->get('project/year/(:num)', 'Project::year/$1');
$routes->get('project/download/(:num)', 'Project::download_aip/$1');

$routes->post('project/add', 'Project::add');
/*----- Project Page End-----*/


/*----- Blotter Page -----*/
$routes->get('blotter', 'Blotter::index');
$routes->get('blotter/add', 'Blotter::add');
$routes->get('blotter/view/(:num)', 'Blotter::view/$1');

$routes->post('blotter/add', 'Blotter::getAdd');
/*----- Blotter Page End-----*/

/*----- Incident Page -----*/
$routes->get('incident', 'Incident::getIndex');
$routes->get('incident/add', 'Incident::getAdd');
$routes->get('incident/view/(:num)', 'Incident::getView/$1');

$routes->post('incident/add', 'Incident::getAdd');
/*----- Incident Page End-----*/

/*----- business Page -----*/
$routes->get('business', 'Business::getIndex');
$routes->get('business/add', 'Business::getAdd');
$routes->get('business/view/(:num)', 'Business::getView/$1');
$routes->get('business/tax_mapping', 'Business::getTaxMapping');
$routes->get('business/tax_mapping/view/(:num)', 'Business::getViewTaxMapping/$1');
$routes->get('business/(:num)/print_clearance', 'Business::print_clearance/$1');

$routes->post('business/add', 'Business::getAdd');
$routes->post('business/update', 'Business::update');
$routes->post('business/update_tax', 'Business::update_tax_mapping');
$routes->post('business/save_clearance', 'Business::save_clearance');
/*----- business Page End-----*/

/*----- business Page Start-----*/

$routes->get('inventory', 'Inventory::getIndex');
$routes->get('inventory/add', 'Inventory::getAdd');

/*----- business Page End-----*/
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
