<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clima\Heading;

class HeadingSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla headings
   * de la base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    Heading::insert([
      ['id' => 1, 'name' => 'Clima Laboral'],
      ['id' => 2, 'name' => 'Cultura Organizacional'],
      ['id' => 3, 'name' => 'Percepción Afectiva Laboral'],
    ]);
  }
}
