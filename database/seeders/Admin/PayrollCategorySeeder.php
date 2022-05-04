<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrollCategorySeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla payroll_categories
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('payroll_categories')->insert([
      ['id' => 1, 'name' => 'Base'],
      ['id' => 2, 'name' => 'Base/Sindicalizado'],
      ['id' => 3, 'name' => 'No aplica'],
    ]);
  }
}
