<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla users
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('users')->insert([[
      'id' => Str::uuid(),
      'payroll' => '12345',
      'email' => 'root@celaya.gob.mx',
      'role_id' => 1,
      'gender_id' => 1,
      'job_id' => 65,
      'job_level_id' => 1,
      'payroll_type_category_id' => 1,
      'dependency_area_id' => 39,
      'name' => 'Juan José',
      'firstsurname'  => 'Ramírez',
      'secondsurname' => 'López',
      'phone' => '4616884636',
      'password' => Hash::make('12345678'),
      'active' => 1,
      'entered_at' => date('Y-m-d'),
    ]]);
  }
}
