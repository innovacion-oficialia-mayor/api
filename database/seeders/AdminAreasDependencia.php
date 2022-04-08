<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminAreasDependencia extends Seeder {
  /**
   * Ejecuta el seeder de la tabla areas_dependencia
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
   DB::table('areas_dependencia')->insert([
      ['id' => 1,  'nombre' => Str::upper('')],
      ['id' => 2,  'nombre' => Str::upper('')],
      ['id' => 3,  'nombre' => Str::upper('')],
      ['id' => 4,  'nombre' => Str::upper('')],
      ['id' => 5,  'nombre' => Str::upper('')],
      ['id' => 6,  'nombre' => Str::upper('')],
      ['id' => 7,  'nombre' => Str::upper('')],
      ['id' => 8,  'nombre' => Str::upper('')],
      ['id' => 9,  'nombre' => Str::upper('')],
      ['id' => 10, 'nombre' => Str::upper('')],
      ['id' => 11, 'nombre' => Str::upper('')],
      ['id' => 12, 'nombre' => Str::upper('')],
      ['id' => 13, 'nombre' => Str::upper('')],
      ['id' => 14, 'nombre' => Str::upper('')],
      ['id' => 15, 'nombre' => Str::upper('')],
    ]);
  }
}
