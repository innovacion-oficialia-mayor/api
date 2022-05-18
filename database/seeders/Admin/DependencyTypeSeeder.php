<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\DependencyType;

class DependencyTypeSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla dependency_types
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DependencyType::insert([
      ['id' => 1, 'name' => 'Centralizada'],
      ['id' => 2, 'name' => 'Descentralizada'],
    ]);
  }
}
