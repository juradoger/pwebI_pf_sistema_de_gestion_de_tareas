<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/users', 'Users::iniciar');
$routes->post('/users/store', 'Users::store');
$routes->post('/users/login', 'Users::login');
$routes->get('/users/iniciar', 'Users::iniciar');
$routes->get('/users/create', 'Users::create');
$routes->get('/tasks', 'Users::index');
$routes->get('/tasks/create', 'Tasks::create');
$routes->post('/tasks/store', 'Tasks::store');
$routes->get('/tasks/edit/(:num)', 'Tasks::edit/$1');
$routes->post('/tasks/update/(:num)', 'Tasks::update/$1');
$routes->post('/tasks/delete/(:num)', 'Tasks::delete/$1');


$routes->get('/home', 'Home::index');

