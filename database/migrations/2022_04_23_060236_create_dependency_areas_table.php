<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla dependency_areas
   * de las base de datos de Administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('dependency_areas', function (Blueprint $table) {
      $table->smallIncrements('id');

      $table->unsignedTinyInteger('dependency_id');

      $table->unsignedTinyInteger('area_id')
            ->nullable();

      $table->unique(['dependency_id', 'area_id']);

      $table->foreign('dependency_id')
            ->references('id')
            ->on('dependencies')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->foreign('area_id')
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
    Schema::dropIfExists('dependency_areas');
  }
};
