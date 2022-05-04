<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DependencySeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla dependencies
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('dependencies')->insert([
      ['id' =>  1, 'dependency_type_id' => 1, 'name' => 'Contraloría Municipal'],
      ['id' =>  2, 'dependency_type_id' => 1, 'name' => 'Desarrollo Económico'],
      ['id' =>  3, 'dependency_type_id' => 1, 'name' => 'Desarrollo Social'],
      ['id' =>  4, 'dependency_type_id' => 1, 'name' => 'Desarrollo Urbano'],
      ['id' =>  5, 'dependency_type_id' => 1, 'name' => 'Medio Ambiente'],
      ['id' =>  6, 'dependency_type_id' => 1, 'name' => 'Obras Públicas'],
      ['id' =>  7, 'dependency_type_id' => 1, 'name' => 'Oficialía Mayor'],
      ['id' =>  8, 'dependency_type_id' => 1, 'name' => 'Tesorería'],
      ['id' =>  9, 'dependency_type_id' => 1, 'name' => 'Secretaría de Seguridad Ciudadana'],
      ['id' => 10, 'dependency_type_id' => 1, 'name' => 'Secretaría del Ayuntamiento'],
      ['id' => 11, 'dependency_type_id' => 1, 'name' => 'Secretaría Particular'],
      ['id' => 12, 'dependency_type_id' => 1, 'name' => 'Servicios Municipales'],
      ['id' => 13, 'dependency_type_id' => 2, 'name' => 'Consejo de Turismo'],
      ['id' => 14, 'dependency_type_id' => 2, 'name' => 'DIF'],
      ['id' => 15, 'dependency_type_id' => 2, 'name' => 'ECOFÓRUM'],
      ['id' => 16, 'dependency_type_id' => 2, 'name' => 'INCLUDIS'],
      ['id' => 17, 'dependency_type_id' => 2, 'name' => 'IMIPE'],
      ['id' => 18, 'dependency_type_id' => 2, 'name' => 'IMJUV'],
      ['id' => 19, 'dependency_type_id' => 2, 'name' => 'IMUVI'],
      ['id' => 20, 'dependency_type_id' => 2, 'name' => 'INSMUJER'],
      ['id' => 21, 'dependency_type_id' => 2, 'name' => 'JUMAPA'],
      ['id' => 22, 'dependency_type_id' => 2, 'name' => 'Parque Xochipilli'],
      ['id' => 23, 'dependency_type_id' => 2, 'name' => 'SIDEC'],
      ['id' => 24, 'dependency_type_id' => 2, 'name' => 'Instituto de Arte y Cultura de Celaya (INSMACC)'],
    ]);
  }
}
