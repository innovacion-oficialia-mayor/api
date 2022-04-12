<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminTiposCategoriasNominaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla tipos_categorias_nomina
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('tipos_categorias_nomina')->insert([
      ['id' => 1, 'id_tipo_nomina' => 1, 'id_categoria_nomina' => 1],
      ['id' => 2, 'id_tipo_nomina' => 1, 'id_categoria_nomina' => 2],
    ]);

    DB::table('tipos_categorias_nomina')->insert([
      ['id' => 3, 'id_tipo_nomina' => 2],
    ]);
  }
}
