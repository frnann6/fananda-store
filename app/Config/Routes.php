<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Home::products');
$routes->get('/brands', 'Home::brands');
$routes->get('/profiles', 'Home::profiles');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');

$routes->get('/logout', 'Auth::logout');

// SuperAdmin
$routes->get('/superadmin', 'SuperAdmin::index');
$routes->get('/superadmin/dashboard', 'SuperAdmin::dashboard');
$routes->get('/superadmin/productss', 'SuperAdmin::products');
$routes->get('/superadmin/users', 'SuperAdmin::users');