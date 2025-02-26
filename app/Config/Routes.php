<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'Home');
$routes->get('/quem-somos', 'Quemsomos');
$routes->get('/cadastre-sua-festa', 'Festa');
$routes->get('/loja', 'Loja');
$routes->get('/contato', 'Contato');
$routes->get('/apoie', 'Apoie');
service('auth')->routes($routes);
