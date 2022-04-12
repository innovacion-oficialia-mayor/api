<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla opciones_preguntas
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('opciones_preguntas', function (Blueprint $table) {
      $table->unsignedSmallInteger('id')
            ->primary();

      $table->unsignedTinyInteger('id_pregunta');

      $table->unsignedTinyInteger('id_opcion');

      $table->unique(['id_pregunta', 'id_opcion']);

      $table->foreign('id_pregunta')
            ->references('id')
            ->on('preguntas')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->foreign('id_opcion')
            ->references('id')
            ->on('opciones')
            ->restrictOnUpdate()
            ->restrictOnDelete();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('opciones_preguntas');
  }
};
