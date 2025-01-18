<?php

use CodeIgniter\Router\RouteCollection;
// use App\Controllers\Pages;
// use App\Controllers\Test;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// $routes->get('pages', [Pages::class, 'index']);
// $routes->get('(:segment)', [Pages::class, 'view']);
// $routes->get('test', [Test::class, 'index']);
$routes->get('test', 'Test::index');
