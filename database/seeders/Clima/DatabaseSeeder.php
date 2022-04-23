<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
  /**
   * Ejecuta todos los seeders de la
   * base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    $this->call([
      HeadingSeeder::class,
      OptionSeeder::class,
      FactorSeeder::class,
      QuestionSeeder::class,
      QuestionOptionSeeder::class,
    ]);
  }
}
