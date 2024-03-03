<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->post('/', 'Users::index');
$routes->match(['get','post'],'register', 'Users::register');
$routes->get('dashboard', 'Dashboard::index');
