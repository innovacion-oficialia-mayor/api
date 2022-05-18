<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Gender;

class GenderSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla genders
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    Gender::insert([
      ['id' => 1, 'name' => 'Masculino'],
      ['id' => 2, 'name' => 'Femenino'],
      ['id' => 3, 'name' => 'Otro'],
    ]);
  }
}
