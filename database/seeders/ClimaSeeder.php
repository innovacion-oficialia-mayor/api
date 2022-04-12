<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClimaSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders de la base de datos de clima laboral.
   *
   * @return void
   */
  public function run() {
    $this->call([
      ClimaRubrosSeeder::class,
      ClimaOpcionesSeeder::class,
      ClimaCategoriasSeeder::class,
      ClimaPreguntasSeeder::class,
      ClimaOpcionesPreguntasSeeder::class,
    ]);
  }
}
