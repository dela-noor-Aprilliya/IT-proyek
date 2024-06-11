<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/FreeUser/index', 'FreeUser::index');
$routes->get('/', 'FreeUser::index');
$routes->get('/Home/index', 'DataBatako::index');
$routes->get('/FreeUser/kontak', 'FreeUser::kontak');
$routes->get('/FreeUser/tentangkami', 'FreeUser::tentangkami');
$routes->get('/FreeUser/formpemesanan', 'FreeUser::formpemesanan');


$routes->get('/User', 'User::index');

$routes->get('DataBatako', 'DataBatako::index');
$routes->post('DataBatako/TambahBatako', 'DataBatako::TambahBatako');
$routes->post('DataBatako/editBatako/(:any)', 'DataBatako::editBatako/$1');
$routes->get('DataBatako/hapusBatako/(:any)', 'DataBatako::hapusBatako/$1');

$routes->get('/Transaksi/index', 'Transaksi::index');
$routes->post('Transaksi/tambahTransaksi', 'Transaksi::tambahTransaksi');
$routes->post('Transaksi/editTransaksi/(:any)', 'Transaksi::editTransaksi/$1');
$routes->get('transaksi/delete/(:num)', 'Transaksi::delete/$1');

$routes->get('/DataUser/index', 'DataUser::index');

$routes->get('/FreeUser/login', 'Login::index');
$routes->post('/akses/login', 'Login::ceklogin');
