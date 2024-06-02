<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/FreeUser/index', 'FreeUser::index');
$routes->get('/', 'FreeUser::index');
$routes->get('/Home/index', 'Home::index');
$routes->get('/FreeUser/kontak', 'FreeUser::kontak');
$routes->get('/FreeUser/tentangkami', 'FreeUser::tentangkami');



$routes->get('DataBatako', 'DataBatako::index');
$routes->post('DataBatako/TambahBatako', 'DataBatako::TambahBatako');
$routes->post('DataBatako/editBatako/(:any)', 'DataBatako::editBatako/$1');
$routes->get('DataBatako/hapusBatako/(:any)', 'DataBatako::hapusBatako/$1');

$routes->get('/Transaksi/index', 'Transaksi::index');
$routes->get('/DataUser/index', 'DataUser::index');
