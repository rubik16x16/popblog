<?php

use App\Controller\RouteCollection;

$routes = new RouteCollection();

$routes->addGet('/', 'User\IndexController@index', 'user.entradas');

$routes->addGet('/admin', 'Admin\AdminController@index', 'admin.index');

// Entradas

$routes->addGet('/admin/entradas', 'Admin\EntradasController@index', 'admin.entradas.index');

$routes->addGet('/admin/entradas/create', 'Admin\EntradasController@create', 'admin.entradas.create');

$routes->addPost('/admin/entradas', 'Admin\EntradasController@store', 'admin.entradas.store');

$routes->addGet('/admin/entradas/{id}/edit', 'Admin\EntradasController@edit', 'admin.entradas.edit');

$routes->addPut('/admin/entradas/{id}', 'Admin\EntradasController@update', 'admin.entradas.update');

$routes->addGet('/admin/entradas/{id}', 'Admin\EntradasController@show', 'admin.entradas.show');

$routes->addDel('/admin/entradas/{id}', 'Admin\EntradasController@destroy', 'admin.entradas.destroy');

return $routes;
