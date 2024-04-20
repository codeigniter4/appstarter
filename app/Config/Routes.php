<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('articles', 'Articles::index');
$routes->get('sitemap', 'Sitemap::index');
$routes->get('web-service/get-social-media-info', 'WebService::get_social_media_info');
