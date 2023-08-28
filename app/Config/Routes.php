<?php

use App\Controllers\News;
use App\Controllers\Pages;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->match(['get', 'post'], 'news/create', [News::class, 'create'], ['as' => 'news_add']);
$routes->get('news/(:segment)', [News::class, 'view'], ['as' => 'news_item']);
$routes->get('/', [News::class, 'index']);
$routes->get('news', [News::class, 'index'], ['as' => 'news']);
$routes->get('pages', [Pages::class, 'index'], ['as' => 'news_page']);
$routes->get('(:segment)', [Pages::class, 'view']);