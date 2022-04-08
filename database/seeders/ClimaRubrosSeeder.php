<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClimaRubrosSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla rubros
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  public function run() {
    DB::connection('clima')->table('rubros')->insert([
      ['id' => 1, 'nombre' => Str::upper('clima laboral')],
      ['id' => 2, 'nombre' => Str::upper('cultura organizacional')],
      ['id' => 3, 'nombre' => Str::upper('percepción afectiva laboral')],
    ]);
  }
}
