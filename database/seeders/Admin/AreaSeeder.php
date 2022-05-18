<?php

namespace Database\Seeders\Admin;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin\Area;

class AreaSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla areas
   * de la base de datos de Administración.
   *
   * @return void
   */
  public function run() {
    Area::insert([
      ['id' =>  1, 'name' => 'Contraloría Municipal'],
      ['id' =>  2, 'name' => 'Unidad de Asuntos Jurídicos y Responsabilidades'],
      ['id' =>  3, 'name' => 'Unidad de Auditorías Financieras y Control Interno'],
      ['id' =>  4, 'name' => 'Unidad de Evaluación y Control de Obra'],
      ['id' =>  5, 'name' => 'Unidad de Quejas, Denuncias, Sugerencias e Investigaciones'],
      ['id' =>  6, 'name' => 'Dirección General'],
      ['id' =>  7, 'name' => 'Administrativo'],
      ['id' =>  8, 'name' => 'Coordinación de Desarrollo Rural'],
      ['id' =>  9, 'name' => 'Coordinación de Infraestructura Social'],
      ['id' => 10, 'name' => 'Coordinación de Participación Ciudadana'],
      ['id' => 11, 'name' => 'Dirección Municipal de Educación'],
      ['id' => 12, 'name' => 'Dirección Municipal de Salud'],
      ['id' => 13, 'name' => 'Coordinación de Inspección y Vigilancia'],
      ['id' => 14, 'name' => 'Coordinación de Patrimonio Histórico'],
      ['id' => 15, 'name' => 'Coordinación de Uso de Suelo'],
      ['id' => 16, 'name' => 'Dirección de Asentamientos Irregulares'],
      ['id' => 17, 'name' => 'Dirección de Control de Desarrollo'],
      ['id' => 18, 'name' => 'Dirección de Fraccionamientos'],
      ['id' => 19, 'name' => 'Coordinación de Ejes Ambientales y Áreas Protegidas'],
      ['id' => 20, 'name' => 'Coordinación de Inspección'],
      ['id' => 21, 'name' => 'Coordinación de Proyectos Estratégicos'],
      ['id' => 22, 'name' => 'Coordinación de Regulación y Control Ambiental'],
      ['id' => 23, 'name' => 'Parque Bicentenario'],
      ['id' => 24, 'name' => 'Coordinación de Costos y Presupuestos'],
      ['id' => 25, 'name' => 'Coordinación Proyectos y Topografía'],
      ['id' => 26, 'name' => 'Dirección Administrativa'],
      ['id' => 27, 'name' => 'Dirección Técnica de Obras Pública'],
      ['id' => 28, 'name' => 'Superintendencia de Mantenimiento y Baches'],
      ['id' => 29, 'name' => 'Oficialía Mayor'],
      ['id' => 30, 'name' => 'Coordinación de Seguros'],
      ['id' => 31, 'name' => 'Dirección de Innovación Gubernamental'],
      ['id' => 32, 'name' => 'Dirección de Personal'],
      ['id' => 33, 'name' => 'Mantenimiento'],
      ['id' => 34, 'name' => 'Servicio Social y Prácticas Profesionales'],
      ['id' => 35, 'name' => 'Tesorería Municipal'],
      ['id' => 36, 'name' => 'Dirección de Contabilidad'],
      ['id' => 37, 'name' => 'Dirección de Compras'],
      ['id' => 38, 'name' => 'Dirección de Control Patrimonial'],
      ['id' => 39, 'name' => 'Dirección de Impuestos Inmobiliarios y Catastro'],
      ['id' => 40, 'name' => 'Dirección de Ingresos'],
      ['id' => 41, 'name' => 'Dirección de Sistemas'],
      ['id' => 42, 'name' => 'Secretaría de Seguridad'],
      ['id' => 43, 'name' => 'Tránsito y Policía Vial'],
      ['id' => 44, 'name' => 'Jueces Calificadores'],
      ['id' => 45, 'name' => 'Protección Civil y Bomberos'],
      ['id' => 46, 'name' => 'Policía Municipal'],
      ['id' => 47, 'name' => 'Infopol'],
      ['id' => 48, 'name' => 'Fiscalización'],
      ['id' => 49, 'name' => 'Coordinación de Archivo'],
      ['id' => 50, 'name' => 'Coordinación de Delegaciones y Comités de Agua'],
      ['id' => 51, 'name' => 'Dirección General de Movilidad y Transporte'],
      ['id' => 52, 'name' => 'Dirección Jurídica'],
      ['id' => 53, 'name' => 'Juzgado Administrativo'],
      ['id' => 54, 'name' => 'S.R.E. (Secretaría de Relaciones Exteriores)'],
      ['id' => 55, 'name' => 'Unidad de Transparencia'],
      ['id' => 56, 'name' => 'Secretaría Particular'],
      ['id' => 57, 'name' => 'Coordinación Administrativa'],
      ['id' => 58, 'name' => 'Coordinación de Atención Ciudadana'],
      ['id' => 59, 'name' => 'Dirección de Comunicación Social'],
      ['id' => 60, 'name' => 'Relaciones Públicas y Eventos Especiales'],
      ['id' => 61, 'name' => 'Alumbrado Público'],
      ['id' => 62, 'name' => 'Parques y Jardines'],
      ['id' => 63, 'name' => 'Rastro Municipal'],
      ['id' => 64, 'name' => 'Aseo Público'],
      ['id' => 65, 'name' => 'Panteones'],
      ['id' => 66, 'name' => 'Coordinación de Recursos Humanos y Financieros'],
      ['id' => 67, 'name' => 'No aplica'],
    ]);
  }
}
