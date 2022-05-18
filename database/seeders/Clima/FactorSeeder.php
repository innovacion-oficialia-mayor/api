<?php

namespace Database\Seeders\Clima;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Clima\Factor;

class FactorSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla factors
   * de la base de datos de Clima Laboral.
   *
   * @return void
   */
  public function run() {
    Factor::insert([
      ['id' =>  1, 'heading_id' => 1, 'name' => 'Reconocimiento Laboral'],
      ['id' =>  2, 'heading_id' => 1, 'name' => 'Capacitación y Desarrollo'],
      ['id' =>  3, 'heading_id' => 1, 'name' => 'Mejora y Cambio'],
      ['id' =>  4, 'heading_id' => 1, 'name' => 'Liderazgo y Participación'],
      ['id' =>  5, 'heading_id' => 1, 'name' => 'Equidad Laboral'],
      ['id' =>  6, 'heading_id' => 1, 'name' => 'Comunicación'],
      ['id' =>  7, 'heading_id' => 1, 'name' => 'Disponibilidad de Recursos'],
      ['id' =>  8, 'heading_id' => 1, 'name' => 'Calidad de Vida Laboral'],
      ['id' =>  9, 'heading_id' => 1, 'name' => 'Colaboración y Trabajo en Equipo'],
      ['id' => 10, 'heading_id' => 2, 'name' => 'Calidad y Orientación al Usuario(a)'],
      ['id' => 11, 'heading_id' => 2, 'name' => 'Identidad con la Institución y Valores'],
      ['id' => 12, 'heading_id' => 2, 'name' => 'Transparencia y Combate a la Corrupción'],
      ['id' => 13, 'heading_id' => 2, 'name' => 'Enfoque a Resultados y Productividad'],
      ['id' => 14, 'heading_id' => 2, 'name' => 'Normatividad y Procesos'],
      ['id' => 15, 'heading_id' => 2, 'name' => 'Impacto de la Encuesta en mi Dependencia'],
      ['id' => 16, 'heading_id' => 2, 'name' => 'Aplicar Eficientemente los Recursos de las Tecnologías de la Información y Comunicación'],
      ['id' => 17, 'heading_id' => 3, 'name' => 'Percepción Afectiva Laboral'],
    ]);
  }
}
