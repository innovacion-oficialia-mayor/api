<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders de la
   * base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    $this->call([
      RoleSeeder::class,
      GenderSeeder::class,
      JobSeeder::class,
      JobLevelSeeder::class,
      PayrollTypeSeeder::class,
      PayrollCategorySeeder::class,
      DependencyTypeSeeder::class,
      AreaSeeder::class,
      PayrollTypesCategorySeeder::class,
    ]);
  }
}
