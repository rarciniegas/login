<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->post('/', 'Users::index');
$routes->get('logout', 'Users::logout');
$routes->match(['get','post'],'register', 'Users::register');
$routes->match(['get','post'],'profile', 'Users::profile');
$routes->get('dashboard', 'Dashboard::index');
