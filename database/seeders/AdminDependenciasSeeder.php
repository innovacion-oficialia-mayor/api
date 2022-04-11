<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminDependenciasSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla dependencias
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('dependencias')->insert([
      ['id' =>  1, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('archivo municipal')],
      ['id' =>  2, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('comunicación social')],
      ['id' =>  3, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('contraloría municipal')],
      ['id' =>  4, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('desarrollo económico')],
      ['id' =>  5, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('desarrollo social')],
      ['id' =>  6, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('desarrollo urbano')],
      ['id' =>  7, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('jurídico')],
      ['id' =>  8, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('juzgado administrativo')],
      ['id' =>  9, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('medio ambiente')],
      ['id' => 10, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('obras públicas')],
      ['id' => 11, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('oficialía mayor')],
      ['id' => 12, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('relaciones exteriores')],
      ['id' => 13, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('secretaría de seguridad ciudadana')],
      ['id' => 14, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('secretaría del ayuntamiento')],
      ['id' => 15, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('secretaría particular')],
      ['id' => 16, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('servicios municipales')],
      ['id' => 17, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('tesorería')],
      ['id' => 18, 'id_tipo_dependencia' => 1, 'nombre' => Str::upper('unidad de transparencia')],
      ['id' => 19, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('consejo de turismo')],
      ['id' => 20, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('dif')],
      ['id' => 21, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('ecofórum')],
      ['id' => 22, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('imipe')],
      ['id' => 23, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('imjuv')],
      ['id' => 24, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('imuvi')],
      ['id' => 25, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('includis')],
      ['id' => 26, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('insmujer')],
      ['id' => 27, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('instituto de arte y cultura de celaya')],
      ['id' => 28, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('jumapa')],
      ['id' => 29, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('parque xochipilli')],
      ['id' => 30, 'id_tipo_dependencia' => 2, 'nombre' => Str::upper('sidec')],
    ]);
  }
}
