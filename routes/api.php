<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
  return $router->app->version();
});

$router->group(['prefix' => '/v1/admin', 'namespace' => 'Admin', 'as' => 'admin'], function () use ($router) {
  $router->group(['prefix' => '/roles', 'as' => 'roles'],  function () use ($router) {
    // Coincide con la URL "/v1/admin/roles" y el nombre de ruta "admin.roles.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'RoleController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'RoleController@show']);
  });
});

$router->group(['prefix' => '/v1/clima', 'namespace' => 'Clima', 'as' => 'clima'], function () use ($router) {
  //
});
