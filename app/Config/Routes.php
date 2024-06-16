<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/(:num)', 'Home::index/$1');
$routes->post('/', 'Home::mail');
$routes->get('/news/(:num)', 'News::news_item/$1');
