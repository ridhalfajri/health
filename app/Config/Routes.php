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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('pendaftaran', 'PendaftaranVaksin::index');
$routes->get('login', 'Auth::login');
$routes->get('recover_password', 'Auth::recover_password');

$routes->get('riwayat', 'Riwayat::index');
$routes->get('riwayat/show', 'Riwayat::show');

$routes->get('profil', 'Profil::index');

$routes->get('jenis_vaksin', 'JenisVaksin::index');
$routes->get('jenis_vaksin/edit', 'JenisVaksin::edit');
$routes->get('jenis_vaksin/create', 'JenisVaksin::create');

$routes->get('dokter', 'Dokter::index');
$routes->get('dokter/edit/(:any)', 'Dokter::edit/$1');
$routes->get('dokter/create', 'Dokter::create');
$routes->post('dokter/store', 'Dokter::store');

$routes->get('lokasi_vaksin', 'LokasiVaksin::index');
$routes->get('lokasi_vaksin/edit', 'LokasiVaksin::edit');
$routes->get('lokasi_vaksin/create', 'LokasiVaksin::create');
$routes->post('lokasi_vaksin/store', 'LokasiVaksin::store');

$routes->get('berita/admin', 'Berita::index');
$routes->get('berita/admin/edit', 'Berita::edit');
$routes->get('berita/admin/create', 'Berita::create');

$routes->get('frontpage', 'Frontpage::edit');
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
