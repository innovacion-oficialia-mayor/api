<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminPuestosSeeder extends Seeder {
  /**
   * Ejecuta el seeder de la tabla puestos
   * de la base de datos de administración.
   *
   * @return void
   */
  public function run() {
    DB::table('puestos')->insert([
      ['id' => 1,	 'nombre' => Str::upper('abogado')],
      ['id' => 2,	 'nombre' => Str::upper('administrador')],
      ['id' => 3,	 'nombre' => Str::upper('agente de vialidad')],
      ['id' => 4,	 'nombre' => Str::upper('albañil')],
      ['id' => 5,	 'nombre' => Str::upper('analista')],
      ['id' => 6,	 'nombre' => Str::upper('archivista')],
      ['id' => 7,	 'nombre' => Str::upper('auditor')],
      ['id' => 8,	 'nombre' => Str::upper('auxiliar')],
      ['id' => 9,	 'nombre' => Str::upper('auxiliar comisionado')],
      ['id' => 10, 'nombre' => Str::upper('auxiliar de apoyo')],
      ['id' => 11, 'nombre' => Str::upper('auxiliar de seguridad')],
      ['id' => 12, 'nombre' => Str::upper('ayudante')],
      ['id' => 13, 'nombre' => Str::upper('bibliotecario')],
      ['id' => 14, 'nombre' => Str::upper('bombero')],
      ['id' => 15, 'nombre' => Str::upper('cadete')],
      ['id' => 16, 'nombre' => Str::upper('cajero')],
      ['id' => 17, 'nombre' => Str::upper('chofer')],
      ['id' => 18, 'nombre' => Str::upper('chofer funcionarios')],
      ['id' => 19, 'nombre' => Str::upper('comisario')],
      ['id' => 20, 'nombre' => Str::upper('contralora')],
      ['id' => 21, 'nombre' => Str::upper('coordinador')],
      ['id' => 22, 'nombre' => Str::upper('coordinador de área')],
      ['id' => 23, 'nombre' => Str::upper('coordinador general')],
      ['id' => 24, 'nombre' => Str::upper('cronista municipal')],
      ['id' => 25, 'nombre' => Str::upper('delegado')],
      ['id' => 26, 'nombre' => Str::upper('director de área')],
      ['id' => 27, 'nombre' => Str::upper('director general')],
      ['id' => 28, 'nombre' => Str::upper('electricista')],
      ['id' => 29, 'nombre' => Str::upper('encargado')],
      ['id' => 30, 'nombre' => Str::upper('especialista técnico')],
      ['id' => 31, 'nombre' => Str::upper('inspector')],
      ['id' => 32, 'nombre' => Str::upper('intendente')],
      ['id' => 33, 'nombre' => Str::upper('jardinero')],
      ['id' => 34, 'nombre' => Str::upper('jefatura')],
      ['id' => 35, 'nombre' => Str::upper('matancero')],
      ['id' => 36, 'nombre' => Str::upper('notificador')],
      ['id' => 37, 'nombre' => Str::upper('oficial')],
      ['id' => 38, 'nombre' => Str::upper('oficial calificador')],
      ['id' => 39, 'nombre' => Str::upper('oficial de cuadrilla')],
      ['id' => 40, 'nombre' => Str::upper('oficial de vialidad')],
      ['id' => 41, 'nombre' => Str::upper('operador de maquinaria o barredora')],
      ['id' => 42, 'nombre' => Str::upper('operativo de seguridad')],
      ['id' => 43, 'nombre' => Str::upper('panteonero')],
      ['id' => 44, 'nombre' => Str::upper('peón')],
      ['id' => 45, 'nombre' => Str::upper('policía')],
      ['id' => 46, 'nombre' => Str::upper('policía unidad de análisis')],
      ['id' => 47, 'nombre' => Str::upper('policía unidad de reacción')],
      ['id' => 48, 'nombre' => Str::upper('presidente municipal')],
      ['id' => 49, 'nombre' => Str::upper('primer comandante de vialidad')],
      ['id' => 50, 'nombre' => Str::upper('programador')],
      ['id' => 51, 'nombre' => Str::upper('promotor')],
      ['id' => 52, 'nombre' => Str::upper('recaudador')],
      ['id' => 53, 'nombre' => Str::upper('regidor')],
      ['id' => 54, 'nombre' => Str::upper('secretaria')],
      ['id' => 55, 'nombre' => Str::upper('secretario de seguridad ciudadana')],
      ['id' => 56, 'nombre' => Str::upper('secretario del h. ayuntamiento')],
      ['id' => 57, 'nombre' => Str::upper('segundo comandante de vialidad')],
      ['id' => 58, 'nombre' => Str::upper('síndico')],
      ['id' => 59, 'nombre' => Str::upper('soldador')],
      ['id' => 60, 'nombre' => Str::upper('subdelegado')],
      ['id' => 61, 'nombre' => Str::upper('subdirector de área')],
      ['id' => 62, 'nombre' => Str::upper('subdirector general')],
      ['id' => 63, 'nombre' => Str::upper('suboficial')],
      ['id' => 64, 'nombre' => Str::upper('superintendente')],
      ['id' => 65, 'nombre' => Str::upper('supervisor')],
      ['id' => 66, 'nombre' => Str::upper('tasador')],
      ['id' => 67, 'nombre' => Str::upper('tesorero')],
      ['id' => 68, 'nombre' => Str::upper('topógrafo')],
      ['id' => 69, 'nombre' => Str::upper('valuador')],
      ['id' => 70, 'nombre' => Str::upper('velador')],
      ['id' => 71, 'nombre' => Str::upper('veterinario')],
    ]);
  }
}
