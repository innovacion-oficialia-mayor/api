<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\PayrollType;

class PayrollTypeSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla payroll_types
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    PayrollType::insert([
      ['id' => 1, 'name' => 'Catorcenal'],
      ['id' => 2, 'name' => 'Quincenal'],
    ]);
  }
}
