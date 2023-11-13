<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->group('blog', function () use ($routes) {
    $routes->get('/', 'Blog::index');
    $routes->get('posts/(:any)', 'Blog::posts/$1');
});
