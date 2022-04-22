<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayrollTypesCategorySeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla payroll_types_categories
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('payroll_types_categories')->insert([
      ['id' => 1, 'payroll_type_id' => 1, 'payroll_category_id' => 1],
      ['id' => 2, 'payroll_type_id' => 1, 'payroll_category_id' => 2],
    ]);

    DB::table('payroll_types_categories')->insert([
      ['id' => 3, 'payroll_type_id' => 2],
    ]);
  }
}
