<?php

use App\Controller\RouteCollection;

$routes = new RouteCollection();

$routes->addGet('/', 'User\IndexController@index', 'user.entradas');

$routes->addGet('/admin', 'Admin\IndexController@index', 'admin.index');

$routes->addGet('/admin/entradas', 'Admin\EntradasController@index', 'admin.entradas.index');

return $routes;
