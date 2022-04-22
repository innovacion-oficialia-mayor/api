<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobLevelSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla job_levels
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('job_levels')->insert([
      ['id' => 1, 'name' => '1'],
      ['id' => 2,	'name' => '2'],
      ['id' => 3,	'name' => '3'],
      ['id' => 4,	'name' => '4'],
      ['id' => 5,	'name' => '5'],
      ['id' => 6,	'name' => 'No aplica'],
    ]);
  }
}
