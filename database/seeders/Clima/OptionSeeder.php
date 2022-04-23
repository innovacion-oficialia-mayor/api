<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla options
   * de la base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    DB::connection('clima')->table('options')->insert([
      ['id' => 1, 'name' => 'Alto'],
      ['id' => 2, 'name' => 'Medio Alto'],
      ['id' => 3, 'name' => 'Medio Bajo'],
      ['id' => 4, 'name' => 'Bajo'],
      ['id' => 5, 'name' => 'Estrés Alto'],
      ['id' => 6, 'name' => 'Estrés Medio'],
      ['id' => 7, 'name' => 'Estrés Leve'],
      ['id' => 8, 'name' => 'Sin estrés'],
    ]);
  }
}
