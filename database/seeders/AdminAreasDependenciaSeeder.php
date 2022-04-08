<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminAreasDependenciaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla areas_dependencia
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('areas_dependencia')->insert([
      ['id' =>  1, 'nombre' => Str::upper('administración del rastro municipal')],
      ['id' =>  2, 'nombre' => Str::upper('administrativo')],
      ['id' =>  3, 'nombre' => Str::upper('centro comunitario')],
      ['id' =>  4, 'nombre' => Str::upper('comisionados')],
      ['id' =>  5, 'nombre' => Str::upper('contraloría municipal')],
      ['id' =>  6, 'nombre' => Str::upper('coordinación administrativa')],
      ['id' =>  7, 'nombre' => Str::upper('coordinación de archivo')],
      ['id' =>  8, 'nombre' => Str::upper('coordinación de atención ciudadana')],
      ['id' =>  9, 'nombre' => Str::upper('coordinación de costos y presupuestos')],
      ['id' => 10, 'nombre' => Str::upper('coordinación de delegaciones y comités de agua')],
      ['id' => 11, 'nombre' => Str::upper('coordinación de desarrollo rural')],
      ['id' => 12, 'nombre' => Str::upper('coordinación de ejes ambientales y áreas protegidas')],
      ['id' => 13, 'nombre' => Str::upper('coordinación de infraestructura social')],
      ['id' => 14, 'nombre' => Str::upper('coordinación de inspección')],
      ['id' => 15, 'nombre' => Str::upper('coordinación de inspección y vigilancia')],
      ['id' => 16, 'nombre' => Str::upper('coordinación de participación ciudadana')],
      ['id' => 17, 'nombre' => Str::upper('coordinación de patrimonio histórico')],
      ['id' => 18, 'nombre' => Str::upper('coordinación de proyectos estratégicos')],
      ['id' => 19, 'nombre' => Str::upper('coordinación de proyectos y topografía')],
      ['id' => 20, 'nombre' => Str::upper('coordinación de regulación y control ambiental')],
      ['id' => 21, 'nombre' => Str::upper('coordinación de seguros')],
      ['id' => 22, 'nombre' => Str::upper('coordinación de uso de suelo')],
      ['id' => 23, 'nombre' => Str::upper('desarrollo social')],
      ['id' => 24, 'nombre' => Str::upper('dirección')],
      ['id' => 25, 'nombre' => Str::upper('dirección administrativa')],
      ['id' => 26, 'nombre' => Str::upper('dirección de alumbrado publico')],
      ['id' => 27, 'nombre' => Str::upper('dirección de asentamiento irregulares')],
      ['id' => 28, 'nombre' => Str::upper('dirección de aseo público')],
      ['id' => 29, 'nombre' => Str::upper('dirección de compras')],
      ['id' => 30, 'nombre' => Str::upper('dirección de comunicación social')],
      ['id' => 31, 'nombre' => Str::upper('dirección de contabilidad')],
      ['id' => 32, 'nombre' => Str::upper('dirección de control de desarrollo')],
      ['id' => 33, 'nombre' => Str::upper('dirección de control patrimonial')],
      ['id' => 34, 'nombre' => Str::upper('dirección de fraccionamientos')],
      ['id' => 35, 'nombre' => Str::upper('dirección de impuestos inmobiliarios y catastro')],
      ['id' => 36, 'nombre' => Str::upper('dirección de ingresos')],
      ['id' => 37, 'nombre' => Str::upper('dirección de innovación gubernamental')],
      ['id' => 38, 'nombre' => Str::upper('dirección de panteones municipales')],
      ['id' => 39, 'nombre' => Str::upper('dirección de parques y jardines')],
      ['id' => 40, 'nombre' => Str::upper('dirección de personal')],
      ['id' => 41, 'nombre' => Str::upper('dirección de r.h. y financieros')],
      ['id' => 42, 'nombre' => Str::upper('dirección de sistemas')],
      ['id' => 43, 'nombre' => Str::upper('dirección general de desarrollo económico')],
      ['id' => 44, 'nombre' => Str::upper('dirección general de desarrollo urbano')],
      ['id' => 45, 'nombre' => Str::upper('dirección general de medio ambiente')],
      ['id' => 46, 'nombre' => Str::upper('dirección general de movilidad y transporte')],
      ['id' => 47, 'nombre' => Str::upper('dirección general de obras publicas')],
      ['id' => 48, 'nombre' => Str::upper('dirección general de secretaria del ayuntamiento')],
      ['id' => 49, 'nombre' => Str::upper('dirección general de servicios municipales')],
      ['id' => 50, 'nombre' => Str::upper('dirección jurídica')],
      ['id' => 51, 'nombre' => Str::upper('dirección municipal de educación')],
      ['id' => 52, 'nombre' => Str::upper('dirección municipal de salud')],
      ['id' => 53, 'nombre' => Str::upper('dirección técnica de obra publica')],
      ['id' => 54, 'nombre' => Str::upper('enlace administrativo')],
      ['id' => 55, 'nombre' => Str::upper('fiscalización')],
      ['id' => 56, 'nombre' => Str::upper('infopol')],
      ['id' => 57, 'nombre' => Str::upper('jueces calificadores')],
      ['id' => 58, 'nombre' => Str::upper('juzgado administrativo')],
      ['id' => 59, 'nombre' => Str::upper('mantenimiento')],
      ['id' => 60, 'nombre' => Str::upper('parque bicentenario')],
      ['id' => 61, 'nombre' => Str::upper('policía municipal')],
      ['id' => 62, 'nombre' => Str::upper('prevención ciudadana')],
      ['id' => 63, 'nombre' => Str::upper('protección civil y bomberos')],
      ['id' => 64, 'nombre' => Str::upper('relaciones públicas y eventos especiales')],
      ['id' => 65, 'nombre' => Str::upper('s.r.e. (secretaria de relaciones exteriores)')],
      ['id' => 66, 'nombre' => Str::upper('secretaría de seguridad')],
      ['id' => 67, 'nombre' => Str::upper('secretaría del h. ayuntamiento')],
      ['id' => 68, 'nombre' => Str::upper('secretaría particular')],
      ['id' => 69, 'nombre' => Str::upper('servicio social y prácticas profesionales')],
      ['id' => 70, 'nombre' => Str::upper('sindicato administrativo')],
      ['id' => 71, 'nombre' => Str::upper('sindicato de obras')],
      ['id' => 72, 'nombre' => Str::upper('superintendencia de mantenimiento y baches')],
      ['id' => 73, 'nombre' => Str::upper('tesorería municipal')],
      ['id' => 74, 'nombre' => Str::upper('tránsito y policía vial')],
      ['id' => 75, 'nombre' => Str::upper('unidad administrativa')],
      ['id' => 76, 'nombre' => Str::upper('unidad de asuntos jurídicos y responsabilidades')],
      ['id' => 77, 'nombre' => Str::upper('unidad de auditorias financieras y de control interno')],
      ['id' => 78, 'nombre' => Str::upper('unidad de evaluación y control de obra')],
      ['id' => 79, 'nombre' => Str::upper('unidad de quejas, denuncias, sugerencias e investigaciones')],
      ['id' => 80, 'nombre' => Str::upper('unidad de transparencia')],
      ['id' => 81, 'nombre' => Str::upper('unidad jurídica')],
    ]);
  }
}
