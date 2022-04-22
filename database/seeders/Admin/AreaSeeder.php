<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla areas
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    DB::table('areas')->insert([
      ['id' =>  1, 'name' => 'Contraloría Municipal'],
      ['id' =>  2, 'name' => 'Unidad de Asuntos Jurídicos y Responsabilidades'],
      ['id' =>  3, 'name' => 'Unidad de Auditorias Financieras y de Control Interno'],
      ['id' =>  4, 'name' => 'Unidad de Evaluación y Control de Obra'],
      ['id' =>  5, 'name' => 'Unidad de Quejas, Denuncias, Sugerencias e Investigaciones'],
      ['id' =>  6, 'name' => 'Desarrollo Social'],
      ['id' =>  7, 'name' => 'Administrativo'],
      ['id' =>  8, 'name' => 'Coordinación de Desarrollo Rural'],
      ['id' =>  9, 'name' => 'Coordinación de Infraestructura Social'],
      ['id' => 10, 'name' => 'Coordinación de Participación Ciudadana'],
      ['id' => 11, 'name' => 'Dirección Municipal de Educación'],
      ['id' => 12, 'name' => 'Dirección Municipal de Salud'],
      ['id' => 13, 'name' => 'Dirección General de Desarrollo Económico'],
      ['id' => 14, 'name' => 'Centro Comunitario'],
      ['id' => 15, 'name' => 'Dirección General de Desarrollo Urbano'],
      ['id' => 16, 'name' => 'Coordinación de Inspección y Vigilancia'],
      ['id' => 17, 'name' => 'Coordinación de Patrimonio Histórico'],
      ['id' => 18, 'name' => 'Coordinación de Uso de Suelo'],
      ['id' => 19, 'name' => 'Dirección de Asentamiento Irregulares'],
      ['id' => 20, 'name' => 'Dirección de Control de Desarrollo'],
      ['id' => 21, 'name' => 'Dirección de Fraccionamientos'],
      ['id' => 22, 'name' => 'Dirección'],
      ['id' => 23, 'name' => 'Dirección General de Medio Ambiente'],
      ['id' => 24, 'name' => 'Coordinación de Ejes Ambientales y Áreas Protegidas'],
      ['id' => 25, 'name' => 'Coordinación de Inspección'],
      ['id' => 26, 'name' => 'Coordinación de Proyectos Estratégicos'],
      ['id' => 27, 'name' => 'Coordinación de Regulación y Control Ambiental'],
      ['id' => 28, 'name' => 'Parque Bicentenario'],
      ['id' => 29, 'name' => 'Dirección General de Obras Públicas'],
      ['id' => 30, 'name' => 'Coordinación de Costos y Presupuestos'],
      ['id' => 31, 'name' => 'Coordinación de Proyectos y Topografía'],
      ['id' => 32, 'name' => 'Dirección Administrativa'],
      ['id' => 33, 'name' => 'Dirección Técnica de Obra Pública'],
      ['id' => 34, 'name' => 'Superintendencia de Mantenimiento y Baches'],
      ['id' => 35, 'name' => 'Coordinación de Seguros'],
      ['id' => 36, 'name' => 'Dirección de Innovación Gubernamental'],
      ['id' => 37, 'name' => 'Dirección de Personal'],
      ['id' => 38, 'name' => 'Mantenimiento'],
      ['id' => 39, 'name' => 'Servicio Social y Prácticas Profesionales'],
      ['id' => 40, 'name' => 'Sindicato de Obras'],
      ['id' => 41, 'name' => 'Sindicato Administrativo'],
      ['id' => 42, 'name' => 'Comisionados'],
      ['id' => 43, 'name' => 'Tesorería Municipal'],
      ['id' => 44, 'name' => 'Dirección de Contabilidad'],
      ['id' => 45, 'name' => 'Dirección de Compras'],
      ['id' => 46, 'name' => 'Dirección de Control Patrimonial'],
      ['id' => 47, 'name' => 'Dirección de Impuestos Inmobiliarios y Catastro'],
      ['id' => 48, 'name' => 'Dirección de Ingresos'],
      ['id' => 49, 'name' => 'Dirección de Sistemas'],
      ['id' => 50, 'name' => 'Secretaría de Seguridad'],
      ['id' => 51, 'name' => 'Tránsito y Policía Vial'],
      ['id' => 52, 'name' => 'Jueces Calificadores'],
      ['id' => 53, 'name' => 'Protección Civil y Bomberos'],
      ['id' => 54, 'name' => 'Policía Municipal'],
      ['id' => 55, 'name' => 'Infopol'],
      ['id' => 56, 'name' => 'Fiscalización'],
      ['id' => 57, 'name' => 'Enlace Administrativo'],
      ['id' => 58, 'name' => 'Prevención Ciudadana'],
      ['id' => 59, 'name' => 'Unidad Administrativa'],
      ['id' => 60, 'name' => 'Unidad Jurídica'],
      ['id' => 61, 'name' => 'Dirección General de Secretaría del Ayuntamiento'],
      ['id' => 62, 'name' => 'Coordinación de Archivo'],
      ['id' => 63, 'name' => 'Coordinación de Delegaciones y Comités de Agua'],
      ['id' => 64, 'name' => 'Dirección General de Movilidad y Transporte'],
      ['id' => 65, 'name' => 'Dirección Jurídica'],
      ['id' => 66, 'name' => 'Juzgado Administrativo'],
      ['id' => 67, 'name' => 'S.R.E. (Secretaria de Relaciones Exteriores)'],
      ['id' => 68, 'name' => 'Secretaría del H. Ayuntamiento'],
      ['id' => 69, 'name' => 'Unidad de Transparencia'],
      ['id' => 70, 'name' => 'Secretaría Particular'],
      ['id' => 71, 'name' => 'Coordinación Administrativa'],
      ['id' => 72, 'name' => 'Coordinación de Atención Ciudadana'],
      ['id' => 73, 'name' => 'Dirección de Comunicación Social'],
      ['id' => 74, 'name' => 'Relaciones Públicas y Eventos Especiales'],
      ['id' => 75, 'name' => 'Dirección General de Servicios Municipales'],
      ['id' => 76, 'name' => 'Administración del Rastro Municipal'],
      ['id' => 77, 'name' => 'Dirección de Alumbrado Público'],
      ['id' => 78, 'name' => 'Dirección de Aseo Público'],
      ['id' => 79, 'name' => 'Dirección de Panteones Municipales'],
      ['id' => 80, 'name' => 'Dirección de Parques y Jardines'],
      ['id' => 81, 'name' => 'Dirección de R.H. y Financieros'],
    ]);
  }
}
