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
      ['id' => 1, 'body' => 'Alto'],
      ['id' => 2, 'body' => 'Medio Alto'],
      ['id' => 3, 'body' => 'Medio Bajo'],
      ['id' => 4, 'body' => 'Bajo'],
      ['id' => 5, 'body' => 'Estrés Alto'],
      ['id' => 6, 'body' => 'Estrés Medio'],
      ['id' => 7, 'body' => 'Estrés Leve'],
      ['id' => 8, 'body' => 'Sin estrés'],
    ]);
  }
}
