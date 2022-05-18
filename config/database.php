<?php

use Illuminate\Support\Str;

return [

  /*
  |--------------------------------------------------------------------------
  | Default Database Connection Name
  |--------------------------------------------------------------------------
  |
  | Here you may specify which of the database connections below you wish
  | to use as your default connection for all database work. Of course
  | you may use many connections at once using the Database library.
  |
  */

  'default' => env('DB_CONNECTION', 'admin'),

  /*
  |--------------------------------------------------------------------------
  | Database Connections
  |--------------------------------------------------------------------------
  |
  | Here are each of the database connections setup for your application.
  | Of course, examples of configuring each database platform that is
  | supported by Laravel is shown below to make development simple.
  |
  |
  | All database work in Laravel is done through the PHP PDO facilities
  | so make sure you have the driver for your particular database of
  | choice installed on your machine before you begin development.
  |
  */

  'connections' => [

    'admin' => [
      'driver' => 'mysql',
      'host' => env('DB_ADMIN_HOST', '127.0.0.1'),
      'port' => env('DB_ADMIN_PORT', 3306),
      'database' => env('DB_ADMIN_DATABASE', 'admin'),
      'username' => env('DB_ADMIN_USERNAME', 'root'),
      'password' => env('DB_ADMIN_PASSWORD', 'root'),
      'unix_socket' => env('DB_ADMIN_SOCKET', ''),
      'charset' => env('DB_ADMIN_CHARSET', 'utf8mb4'),
      'collation' => env('DB_ADMIN_COLLATION', 'utf8mb4_spanish_ci'),
      'prefix' => env('DB_ADMIN_PREFIX', ''),
      'strict' => env('DB_ADMIN_STRICT_MODE', true),
      'engine' => env('DB_ADMIN_ENGINE'),
      'timezone' => env('DB_ADMIN_TIMEZONE', '+00:00'),
    ],

    /*
    'admin' => [
      'driver' => 'pgsql',
      'host' => env('DB_ADMIN_HOST', '127.0.0.1'),
      'port' => env('DB_ADMIN_PORT', 5432),
      'database' => env('DB_ADMIN_DATABASE', 'admin'),
      'username' => env('DB_ADMIN_USERNAME', 'root'),
      'password' => env('DB_ADMIN_PASSWORD', 'root'),
      'charset' => env('DB_ADMIN_CHARSET', 'utf8'),
      'prefix' => env('DB_ADMIN_PREFIX', ''),
      'search_path' => env('DB_ADMIN_SCHEMA', 'public'),
      'sslmode' => env('DB_ADMIN_SSL_MODE', 'prefer'),
    ],
    */

    'clima' => [
      'driver' => 'mysql',
      'host' => env('DB_CLIMA_HOST', '127.0.0.1'),
      'port' => env('DB_CLIMA_PORT', 3306),
      'database' => env('DB_CLIMA_DATABASE', 'clima'),
      'username' => env('DB_CLIMA_USERNAME', 'root'),
      'password' => env('DB_CLIMA_PASSWORD', 'root'),
      'unix_socket' => env('DB_CLIMA_SOCKET', ''),
      'charset' => env('DB_CLIMA_CHARSET', 'utf8mb4'),
      'collation' => env('DB_CLIMA_COLLATION', 'utf8mb4_spanish_ci'),
      'prefix' => env('DB_CLIMA_PREFIX', ''),
      'strict' => env('DB_CLIMA_STRICT_MODE', true),
      'engine' => env('DB_CLIMA_ENGINE'),
      'timezone' => env('DB_CLIMA_TIMEZONE', '+00:00'),
    ],

    /*
    'clima' => [
      'driver' => 'pgsql',
      'host' => env('DB_CLIMA_HOST', '127.0.0.1'),
      'port' => env('DB_CLIMA_PORT', 5432),
      'database' => env('DB_CLIMA_DATABASE', 'clima'),
      'username' => env('DB_CLIMA_USERNAME', 'root'),
      'password' => env('DB_CLIMA_PASSWORD', 'root'),
      'charset' => env('DB_CLIMA_CHARSET', 'utf8'),
      'prefix' => env('DB_CLIMA_PREFIX', ''),
      'search_path' => env('DB_CLIMA_SCHEMA', 'public'),
      'sslmode' => env('DB_CLIMA_SSL_MODE', 'prefer'),
    ],
    */

  ],

  /*
  |--------------------------------------------------------------------------
  | Migration Repository Table
  |--------------------------------------------------------------------------
  |
  | This table keeps track of all the migrations that have already run for
  | your application. Using this information, we can determine which of
  | the migrations on disk haven't actually been run in the database.
  |
  */

  'migrations' => 'migrations',

];
