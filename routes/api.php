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
    // Coincide con la URL "/v1/admin/roles" con el nombre de ruta "admin.roles.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'RoleController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'RoleController@show']);
  });

  $router->group(['prefix' => '/genders', 'as' => 'genders'],  function () use ($router) {
    // Coincide con la URL "/v1/admin/genders" con el nombre de ruta "admin.genders.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'GenderController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'GenderController@show']);
  });

  $router->group(['prefix' => '/jobs/levels', 'as' => 'genders'],  function () use ($router) {
    // Coincide con la URL "/v1/admin/jobs/levels" con el nombre de ruta "admin.jobs.levels.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'JobLevelController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'JobLevelController@show']);
  });

  $router->group(['prefix' => '/jobs', 'as' => 'genders'],  function () use ($router) {
    // Coincide con la URL "/v1/admin/jobs" con el nombre de ruta "admin.jobs.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'JobController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'JobController@show']);
  });

  $router->group(['prefix' => '/payrolls', 'as' => 'genders'],  function () use ($router) {
    // Coincide con la URL "/v1/admin/payrolls" con el nombre de ruta "admin.payrolls.index".
    $router->get('/',     ['as' => 'index', 'uses' => 'PayrollTypesCategoryController@index']);
    $router->get('/{id}', ['as' => 'show',  'uses' => 'PayrollTypesCategoryController@show']);
  });
});

$router->group(['prefix' => '/v1/clima', 'namespace' => 'Clima', 'as' => 'clima'], function () use ($router) {
  //
});
