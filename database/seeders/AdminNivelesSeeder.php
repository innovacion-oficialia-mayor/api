<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminNivelesSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla niveles
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('niveles')->insert([
      ['id' => 1,  'nombre' => ('1')],
      ['id' => 2,  'nombre' => ('2')],
      ['id' => 3,  'nombre' => ('3')],
      ['id' => 4,  'nombre' => ('4')],
      ['id' => 5,  'nombre' => ('5')],
      ['id' => 6,  'nombre' => ('A1')],
      ['id' => 7,  'nombre' => ('A2')],
      ['id' => 8,  'nombre' => ('A3')],
      ['id' => 9,  'nombre' => ('A4')],
      ['id' => 10, 'nombre' => ('A5')],
      ['id' => 11, 'nombre' => ('B1')],
      ['id' => 12, 'nombre' => ('B2')],
      ['id' => 13, 'nombre' => ('B3')],
      ['id' => 14, 'nombre' => ('B4')],
      ['id' => 15, 'nombre' => ('B5')],
      ['id' => 16, 'nombre' => ('C1')],
      ['id' => 17, 'nombre' => ('C2')],
      ['id' => 18, 'nombre' => ('C3')],
      ['id' => 19, 'nombre' => ('C4')],
      ['id' => 20, 'nombre' => ('C5')],
    ]);
  }
}
