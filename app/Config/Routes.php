<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index', ['filter' => 'visitor:guest']);

$routes->match(['get', 'post'], 'xyz/new', 'Sistem::adminBaru', ['filter' => 'noadmin:noreturn']);
$routes->match(['get', 'post'], 'login', 'Sistem::login', ['filter' => 'visitor:guest']);
$routes->group('admin', function($routes) {
	$routes->get('/', 'Admin\AdminHome::index', ['filter' => 'visitor:admin']);
	$routes->get('dashboard', 'Admin\AdminHome::index', ['filter' => 'visitor:admin']);
	
	$routes->group('pegawai', function($routes) {
		$routes->get('/', 'Admin\AdminPegawai::index', ['filter' => 'visitor:admin']);
		$routes->match(['get', 'post'], 'tambah', 'Admin\AdminPegawai::tambah', ['filter' => 'visitor:admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\AdminPegawai::edit', ['filter' => 'visitor:admin']);
		$routes->post('hapus', 'Admin\AdminPegawai::hapus', ['filter' => 'visitor:admin']);
	});

	$routes->group('menu', function($routes) {
		$routes->get('/', 'Admin\AdminMenu::index', ['filter' => 'visitor:admin']);
		$routes->match(['get', 'post'], 'tambah', 'Admin\AdminMenu::tambah', ['filter' => 'visitor:admin']);
		$routes->match(['get', 'post'], 'edit', 'Admin\AdminMenu::edit', ['filter' => 'visitor:admin']);
		$routes->post('hapus', 'Admin\AdminMenu::hapus', ['filter' => 'visitor:admin']);
	});
});
$routes->group('koki', function($routes) {
	$routes->get('/', 'Koki\KokiHome::index', ['filter' => 'visitor:koki']);
	$routes->get('dashboard', 'Koki\KokiHome::index', ['filter' => 'visitor:koki']);
});
$routes->group('pelayan', function($routes) {
	$routes->get('/', 'Pelayan\PelayanHome::index', ['filter' => 'visitor:pelayan']);
	$routes->get('dashboard', 'Pelayan\PelayanHome::index', ['filter' => 'visitor:pelayan']);
});
$routes->group('kasir', function($routes) {
	$routes->get('/', 'Kasir\KasirHome::index', ['filter' => 'visitor:kasir']);
	$routes->get('dashboard', 'Kasir\KasirHome::index', ['filter' => 'visitor:kasir']);
});
$routes->match(['get', 'post'], 'logout', 'Sistem::logout', ['filter' => 'noadmin']);


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
