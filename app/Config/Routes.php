<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
$routes->get('/about','Pages::about');
$routes->group('kanban', function($routes) {
    $routes->get('/', 'Kanban::index');
    $routes->get('create', 'Kanban::create');
    $routes->post('store', 'Kanban::store');
    $routes->get('edit/(:num)', 'Kanban::edit/$1');
    $routes->post('edit/(:num)', 'Kanban::update/$1');
    $routes->get('delete/(:num)', 'Kanban::delete/$1');
    $routes->post('updatePosition', 'Kanban::updatePosition');
});