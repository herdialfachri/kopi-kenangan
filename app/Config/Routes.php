<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //routes landing page
$routes->get('/', 'Home::index');

//routes untuk login
$routes->get('/login_admin', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');

//routes untuk dashboard setelah login
$routes->get('/dashboard_admin', 'AuthController::dashboard_admin', ['filter' => 'auth']);
$routes->get('/dashboard_owner', 'AuthController::dashboard_owner', ['filter' => 'auth']);

//routes untuk mengatur karyawan
$routes->get('/daftar_karyawan', 'KaryawanController::index', ['filter' => 'auth']);
$routes->get('/tambah_karyawan', 'KaryawanController::create', ['filter' => 'auth']);
$routes->post('/karyawan/save_karyawan', 'KaryawanController::store');
$routes->get('/karyawan/edit/(:num)', 'KaryawanController::edit/$1', ['filter' => 'auth']);
$routes->post('/karyawan/update/(:num)', 'KaryawanController::update/$1');
$routes->get('/karyawan/delete/(:num)', 'KaryawanController::delete/$1');

//routes untuk mengatur pengguna aplikasi
$routes->get('/admin/list', 'AdminController::index', ['filter' => 'auth']);
$routes->get('/admin/create', 'AdminController::create', ['filter' => 'auth']);
$routes->post('/admin/store', 'AdminController::store');
$routes->get('/admin/edit/(:num)', 'AdminController::edit/$1', ['filter' => 'auth']);
$routes->post('/admin/update/(:num)', 'AdminController::update/$1');
$routes->get('/admin/delete/(:num)', 'AdminController::delete/$1');

//routes menampilkan daftar barang
$routes->get('/daftar_barang', 'StokController::index_owner', ['filter' => 'auth']);

//routes untuk mengatur pemasukan barang
$routes->get('/pemasokan', 'PemasokanController::index', ['filter' => 'auth']);
$routes->get('/pemasokan/create', 'PemasokanController::create', ['filter' => 'auth']);
$routes->post('/pemasokan/store', 'StokController::addPemasokan');
$routes->get('/pemasokan/edit/(:num)', 'PemasokanController::edit/$1', ['filter' => 'auth']);
$routes->post('/pemasokan/update/(:num)', 'PemasokanController::update/$1');
$routes->get('/download-pdf', 'PdfController::downloadPdf');

//routes untuk mengatur pengeluaran barang
$routes->get('/pengeluaran_admin', 'PengeluaranController::index', ['filter' => 'auth']);
$routes->get('/pengeluaran/create', 'PengeluaranController::create', ['filter' => 'auth']);
$routes->post('/pengeluaran/store', 'StokController::addPengeluaran');
$routes->get('/pengeluaran/edit/(:num)', 'PengeluaranController::edit/$1', ['filter' => 'auth']);
$routes->post('/pengeluaran/update/(:num)', 'PengeluaranController::update/$1');

//routes untuk mengatur semua barang
$routes->get('/barang', 'BarangController::index', ['filter' => 'auth']);
$routes->get('/barang/create', 'BarangController::create', ['filter' => 'auth']);
$routes->post('/barang/store', 'BarangController::store');
$routes->get('/barang/total', 'StokController::index', ['filter' => 'auth']);

//routes untuk mengatur kontak suppliers
$routes->get('/suppliers', 'SupplierController::index', ['filter' => 'auth']);
$routes->get('/supplier/create', 'SupplierController::create', ['filter' => 'auth']);
$routes->post('/supplier/store', 'SupplierController::store');

//routes untuk mengatur kontak pelanggan
$routes->get('/pelanggan', 'PelangganController::index', ['filter' => 'auth']);
$routes->get('/pelanggan/create', 'PelangganController::create', ['filter' => 'auth']);
$routes->post('/pelanggan/store', 'PelangganController::store');

$routes->get('pengeluaran/exportPdf', 'PengeluaranController::exportPdf');
$routes->get('pemasokan/exportPdf', 'PemasokanController::exportPdf');

//routes untuk dashboard owner
// $routes->get('/pengeluaran', 'KeuanganController::pengeluaran');
// $routes->get('/pemasukan', 'KeuanganController::pemasukan');