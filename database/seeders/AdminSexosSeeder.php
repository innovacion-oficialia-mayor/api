<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSexosSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla sexos
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('sexos')->insert([
      ['id' => 1, 'nombre' => Str::upper('masculino')],
      ['id' => 2, 'nombre' => Str::upper('femenino')],
      ['id' => 3, 'nombre' => Str::upper('otro')],
    ]);
  }
}
