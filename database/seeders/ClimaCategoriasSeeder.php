<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ClimaCategoriasSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla categorias
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  public function run() {
    DB::connection('clima')->table('categorias')->insert([
      ['id' =>  1, 'id_rubro' => 1, 'nombre' => Str::upper('reconocimiento laboral')],
      ['id' =>  2, 'id_rubro' => 1, 'nombre' => Str::upper('capacitación y desarrollo')],
      ['id' =>  3, 'id_rubro' => 1, 'nombre' => Str::upper('mejora y cambio')],
      ['id' =>  4, 'id_rubro' => 1, 'nombre' => Str::upper('liderazgo y participación')],
      ['id' =>  5, 'id_rubro' => 1, 'nombre' => Str::upper('equidad laboral')],
      ['id' =>  6, 'id_rubro' => 1, 'nombre' => Str::upper('comunicación')],
      ['id' =>  7, 'id_rubro' => 1, 'nombre' => Str::upper('disponibilidad de recursos')],
      ['id' =>  8, 'id_rubro' => 1, 'nombre' => Str::upper('calidad de vida laboral')],
      ['id' =>  9, 'id_rubro' => 1, 'nombre' => Str::upper('colaboración y trabajo en equipo')],
      ['id' => 10, 'id_rubro' => 2, 'nombre' => Str::upper('calidad y orientación al usuario(a)')],
      ['id' => 11, 'id_rubro' => 2, 'nombre' => Str::upper('identidad con la institución y valores')],
      ['id' => 12, 'id_rubro' => 2, 'nombre' => Str::upper('transparencia y combate a la corrupción')],
      ['id' => 13, 'id_rubro' => 2, 'nombre' => Str::upper('enfoque a resultados y productividad')],
      ['id' => 14, 'id_rubro' => 2, 'nombre' => Str::upper('normatividad y procesos')],
      ['id' => 15, 'id_rubro' => 2, 'nombre' => Str::upper('impacto de la encuesta en mi dependencia')],
      ['id' => 16, 'id_rubro' => 2, 'nombre' => Str::upper('aplicar eficientemente los recursos de las tecnologías de información y comunicación')],
      ['id' => 17, 'id_rubro' => 3, 'nombre' => Str::upper('percepción afectiva laboral')],
    ]);
  }
}
