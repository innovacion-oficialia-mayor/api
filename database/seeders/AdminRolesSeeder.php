<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminRolesSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla roles
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('roles')->insert([
      ['id' => 1, 'nombre' => Str::upper('admin'),    'descripcion' => Str::upper('auxiliar de innovación gubernamental')],
      ['id' => 2, 'nombre' => Str::upper('enlace'),   'descripcion' => Str::upper('enlace administrativo')],
      ['id' => 3, 'nombre' => Str::upper('servidor'), 'descripcion' => Str::upper('servidor público')],
    ]);
  }
}
