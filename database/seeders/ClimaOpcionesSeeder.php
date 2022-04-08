<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClimaOpcionesSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla opciones
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  public function run() {
    DB::connection('clima')->table('opciones')->insert([
      ['id' => 1, 'nombre' => Str::upper('bajo')],
      ['id' => 2, 'nombre' => Str::upper('medio bajo')],
      ['id' => 3, 'nombre' => Str::upper('medio alto')],
      ['id' => 4, 'nombre' => Str::upper('alto')],
      ['id' => 5, 'nombre' => Str::upper('sin estrés')],
      ['id' => 6, 'nombre' => Str::upper('estrés leve')],
      ['id' => 7, 'nombre' => Str::upper('estrés medio')],
      ['id' => 8, 'nombre' => Str::upper('estrés alto')],
    ]);
  }
}
