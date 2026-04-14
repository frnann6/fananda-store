<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/products', 'Home::products');
$routes->get('/brands', 'Home::brands');
$routes->get('/profiles', 'Home::profiles');