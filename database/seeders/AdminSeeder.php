<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    $this->call([
      AdminRolesSeeder::class,
      AdminSexosSeeder::class,
      AdminPuestosSeeder::class,
      AdminNivelesPuestoSeeder::class,
      AdminTiposNominaSeeder::class,
      AdminCategoriasNominaSeeder::class,
      AdminTiposDependenciaSeeder::class,
      AdminAreasSeeder::class,
      AdminTiposCategoriasNominaSeeder::class,
      AdminDependenciasSeeder::class,
      AdminAreasDependenciasSeeder::class,
    ]);
  }
}
