<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminTiposDependenciaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla tipos_dependencia
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('tipos_dependencia')->insert([
      ['id' => 1, 'nombre' => Str::upper('centralizada')],
      ['id' => 2, 'nombre' => Str::upper('descentralizada')],
    ]);
  }
}
