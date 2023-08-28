<?php

use App\Controllers\Home;
use App\Controllers\News;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('pages/(:segment)', [Pages::class, 'view']);

$routes->group('news', function ($routes) {
    $routes->get('', [News::class, 'index'], ['as' => 'news']);
    $routes->match(['get', 'post'], 'create', [News::class, 'create'], ['as' => 'news_add']);
    $routes->get('(:segment)', [News::class, 'view'], ['as' => 'news_item']);
});
