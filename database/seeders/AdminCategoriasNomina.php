<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminCategoriasNomina extends Seeder {
  /**
   * Ejecuta el seeder de la tabla categorias_nomina
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('categorias_nomina')->insert([
      ['id' => 1, 'nombre' => Str::upper('base')],
      ['id' => 2, 'nombre' => Str::upper('base/sindicalizado')],
    ]);
  }
}
