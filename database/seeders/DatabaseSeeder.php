<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders
   * de todas las bases de datos.
   *
   * @return void
   */
  public function run() {
    $this->call([
      Admin\DatabaseSeeder::class,
      Clima\DatabaseSeeder::class,
    ]);
  }
}
