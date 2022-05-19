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

$router->get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

/**
 * Autenticación de usuarios.
 */
$router->group(['prefix' => '/v1/auth', 'as' => 'auth'], function () use ($router) {
  /**
   * Coincide con la ruta /v1/auth/login y el nombre 'auth.adminLogin'.
   */
  $router->post('/admin/login', ['as' => 'adminLogin', 'uses' => 'AuthController@adminLogin']);
  $router->post('/login',       ['as' => 'login',      'uses' => 'AuthController@login']);
  $router->post('/logout',      ['as' => 'logout',     'uses' => 'AuthController@logout']);
  $router->post('/refresh',     ['as' => 'refresh',    'uses' => 'AuthController@refresh']);
  $router->post('/me',          ['as' => 'me',         'uses' => 'AuthController@me']);
});

/**
 * Administración y consulta de empleados y dependencias.
 */
$router->group(['prefix' => '/v1/admin', /* 'middleware' => ['auth:api', 'can:admin'], */ 'namespace' => 'Admin', 'as' => 'admin'], function () use ($router) {
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
      $router->group(['prefix' => '/categories', 'as' => 'categories'], function () use ($router) {
        /**
         * Coincide con la ruta /v1/admin/payrolls/types/categories y el nombre 'admin.payrolls.types.categories.index'.
         */
        $router->get('/', ['as' => 'index', 'uses' => 'PayrollTypesCategoryController@index']);
      });
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
    $router->group(['prefix' => '/types', 'as' => 'types'], function () use ($router) {
      $router->group(['prefix' => '/areas', 'as' => 'areas'], function () use ($router) {
        /**
         * Coincide con la ruta /v1/admin/dependencies/types/areas y el nombre 'admin.dependencies.types.areas'.
         */
        $router->get('/', ['as' => 'areas', 'uses' => 'DependencyTypeController@dependencies']);
      });
      /**
       * Coincide con la ruta /v1/admin/dependencies/types y el nombre 'admin.dependencies.types.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'DependencyTypeController@index']);
    });
    $router->group(['prefix' => '/areas', 'as' => 'areas'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/admin/dependencies/areas y el nombre 'admin.dependencies.areas.index'.
       */
      $router->get('/', ['as' => 'index', 'uses' => 'DependencyAreaController@index']);
    });
    /**
     * Coincide con la ruta /v1/admin/dependencies y el nombre 'admin.dependencies.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'DependencyController@index']);
  });
  $router->group(['prefix' => '/areas', 'as' => 'areas'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/admin/areas y el nombre 'admin.areas.index'.
     */
    $router->get('/', ['as' => 'index', 'uses' => 'AreaController@index']);
  });
  $router->group(['prefix' => '/users', 'as' => 'users'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/admin/users y el nombre 'admin.users.index'.
     */
    $router->get('/',     ['as' => 'index',  'uses' => 'UserController@index']);
    $router->get('/{id}', ['as' => 'show',   'uses' => 'UserController@show']);
    $router->post('/',    ['as' => 'store',  'uses' => 'UserController@store']);
    $router->put('/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
  });
});

/**
 * Clima Laboral y Cultura Organizacional.
 */
$router->group(['prefix' => '/v1/clima', /* 'middleware' => ['auth:api', 'can:admin'], */ 'namespace' => 'Clima', 'as' => 'clima'], function () use ($router) {
  $router->group(['prefix' => '/surveys', 'as' => 'surveys'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/clima/surveys y el nombre 'clima.surveys.index'.
     */
    $router->get('/',  ['as' => 'index', 'uses' => 'SurveyController@index']);
    $router->post('/', ['as' => 'store', 'uses' => 'SurveyController@store']);
  });

  $router->group(['prefix' => '/headings', 'as' => 'headings'], function () use ($router) {
    /**
     * Coincide con la ruta /v1/clima/headings y el nombre 'clima.headings.index'.
     */
    $router->get('/',  ['as' => 'index', 'uses' => 'HeadingController@index']);
  });

  $router->group(['prefix' => '/questions', 'as' => 'questions'], function () use ($router) {
    $router->group(['prefix' => '/headings', 'as' => 'headings'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/clima/questions/headings y el nombre 'clima.questions.headings.index'.
       */
      $router->get('/',  ['as' => 'index', 'uses' => 'QuestionHeadingController@index']);
    });
    $router->group(['prefix' => '/factors', 'as' => 'factors'], function () use ($router) {
      /**
       * Coincide con la ruta /v1/clima/questions/factors/heading/{id} y el nombre 'clima.questions.factors.heading'.
       */
      $router->get('/heading/{id}',  ['as' => 'heading', 'uses' => 'QuestionFactorController@heading']);
      $router->get('/',              ['as' => 'index',   'uses' => 'QuestionFactorController@index']);
    });
    /**
     * Coincide con la ruta /v1/clima/questions y el nombre 'clima.questions.index'.
     */
    $router->get('/',  ['as' => 'index', 'uses' => 'QuestionController@index']);
  });
});
