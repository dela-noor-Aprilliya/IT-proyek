<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Home/index', 'Home::index');
$routes->get('/DataBatako/index', 'DataBatako::index');
$routes->get('/Transaksi/index', 'Transaksi::index');
$routes->get('/DataUser/index', 'DataUser::index');
