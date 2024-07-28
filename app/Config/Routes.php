<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login_admin', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');
$routes->get('/dashboard_admin', 'AuthController::dashboard_admin', ['filter' => 'auth']);
$routes->get('/dashboard_owner', 'AuthController::dashboard_owner', ['filter' => 'auth']);
$routes->get('/daftar_karyawan', 'KaryawanController::daftarkaryawan');
$routes->get('/tambah_karyawan', 'KaryawanController::add_karyawan');
$routes->get('/pengeluaran', 'KeuanganController::pengeluaran');
$routes->get('/pemasukan', 'KeuanganController::pemasukan');
$routes->get('/daftar_barang', 'BarangController::view_barang'); 
  
$routes->get('/karyawan/edit/(:num)', 'KaryawanController::edit/$1');
$routes->post('/karyawan/update/(:num)', 'KaryawanController::update/$1');
$routes->get('/karyawan/delete/(:num)', 'KaryawanController::delete/$1');
$routes->post('/karyawan/save_karyawan', 'KaryawanController::save_karyawan');

$routes->get('/pelanggan', 'PelangganController::index');
$routes->get('/pelanggan/create', 'PelangganController::create');
$routes->post('/pelanggan/store', 'PelangganController::store');

$routes->get('/suppliers', 'SupplierController::index');
$routes->get('/supplier/create', 'SupplierController::create');
$routes->post('/supplier/store', 'SupplierController::store');

$routes->get('/pemasokan', 'PemasokanController::index');
$routes->get('/pemasokan/create', 'PemasokanController::create');
$routes->post('/pemasokan/store', 'StokController::addPemasokan');

$routes->get('/pengeluaran_admin', 'PengeluaranController::index');
$routes->get('/pengeluaran/create', 'PengeluaranController::create');
$routes->post('/pengeluaran/store', 'StokController::addPengeluaran');

$routes->get('/barang', 'BarangController::index');
$routes->get('/barang/create', 'BarangController::create');
$routes->post('/barang/store', 'BarangController::store');
$routes->get('/barang/total', 'StokController::index');


