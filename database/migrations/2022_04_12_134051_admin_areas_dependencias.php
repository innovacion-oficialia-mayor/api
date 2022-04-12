<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla areas_dependencias
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('areas_dependencias', function (Blueprint $table) {
      $table->unsignedSmallInteger('id')
            ->primary();

      $table->unsignedTinyInteger('id_dependencia');

      $table->unsignedTinyInteger('id_area')
            ->nullable();

      $table->unique(['id_dependencia', 'id_area']);

      $table->foreign('id_dependencia')
            ->references('id')
            ->on('dependencias')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->foreign('id_area')
            ->references('id')
            ->on('areas')
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
    Schema::dropIfExists('areas_dependencias');
  }
};
