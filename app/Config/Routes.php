<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

//post users
$routes->post('/insert', 'Home::insert');

//show users
$routes->get('/show', 'Home::show');

//edit users
$routes->get('/edit/(:num)', 'Home::edit/$1');


//update users
$routes->post('/update', 'Home::update');

//delete users
$routes->get('/delete/(:num)', 'Home::delete/$1');
