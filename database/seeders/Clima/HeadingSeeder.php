<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeadingSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla headings
   * de la base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    DB::connection('clima')->table('headings')->insert([
      ['id' => 1, 'name' => 'Clima Laboral'],
      ['id' => 2, 'name' => 'Cultura Organizacional'],
      ['id' => 3, 'name' => 'Percepción Afectiva Laboral'],
    ]);
  }
}
