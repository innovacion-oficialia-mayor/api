<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\PayrollTypesCategory;

class PayrollTypesCategorySeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla payroll_types_categories
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    PayrollTypesCategory::insert([
      ['id' => 1, 'payroll_type_id' => 1, 'payroll_category_id' => 1],
      ['id' => 2, 'payroll_type_id' => 1, 'payroll_category_id' => 2],
      ['id' => 3, 'payroll_type_id' => 2, 'payroll_category_id' => 3],
    ]);
  }
}
