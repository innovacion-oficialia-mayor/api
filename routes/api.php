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

/**
 * Administración y consulta de empleados y dependencias.
 */
$router->group(['prefix' => '/v1/admin', 'namespace' => 'Admin', 'as' => 'admin'], function () use ($router) {
  $router->group(['prefix' => '/roles', 'as' => 'roles'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/admin/roles y el nombre 'admin.roles.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'RoleController@index']);
  });

  $router->group(['prefix' => '/genders', 'as' => 'genders'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/admin/genders y el nombre 'admin.genders.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'GenderController@index']);
  });

  $router->group(['prefix' => '/jobs', 'as' => 'jobs'], function () use ($router) {
    $router->group(['prefix' => '/levels', 'as' => 'levels'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/admin/jobs/levels y el nombre 'admin.jobs.levels.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'JobLevelController@index']);
    });
    /**
     * Coincide con la ruta /v1/admin/jobs y el nombre 'admin.jobs.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'JobController@index']);
  });

  $router->group(['prefix' => '/payrolls', 'as' => 'payrolls'], function () use ($router) {
    $router->group(['prefix' => '/types', 'as' => 'types'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/admin/payrolls/types y el nombre 'admin.payrolls.types.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'PayrollTypeController@index']);
    });
    $router->group(['prefix' => '/categories', 'as' => 'categories'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/admin/payrolls/categories y el nombre 'admin.payrolls.categories.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'PayrollCategoryController@index']);
    });
  });

  $router->group(['prefix' => '/dependencies', 'as' => 'dependencies'], function () use ($router) {
    $router->group(['prefix' => '/areas', 'as' => 'areas'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/admin/dependencies/areas y el nombre 'admin.dependencies.areas.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'AreaController@index']);
    });
    /**
     * Coincide con la ruta /v1/admin/dependencies/types y el nombre 'admin.dependencies.types.index'.
     */
    $router->group(['prefix' => '/types', 'as' => 'types'], function () use ($router) {
      $router->get('/', ['as' => 'index', 'uses' => 'DependencyTypeController@index']);
    });
    /**
     * Coincide con la ruta /v1/admin/dependencies y el nombre 'admin.dependencies.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'DependencyController@index']);
  });
});
