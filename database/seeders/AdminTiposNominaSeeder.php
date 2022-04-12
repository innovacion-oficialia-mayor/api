<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminTiposNominaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla tipos_nomina
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('tipos_nomina')->insert([
      ['id' => 1, 'nombre' => Str::upper('catorcenal')],
      ['id' => 2, 'nombre' => Str::upper('quincenal')],
    ]);
  }
}