<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Route untuk halaman beranda
$routes->get('/', 'Home::index');

// Route untuk halaman tentang
$routes->get('/about', 'About::index');

// Route untuk halaman layanan
$routes->get('/services', 'Services::index');

