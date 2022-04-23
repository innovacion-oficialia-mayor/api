<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla dependencies
   * de las base de datos de Administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('dependencies', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->string('name', 255)
            ->unique();

      $table->unsignedTinyInteger('dependency_type_id')
            ->nullable();

      $table->foreign('dependency_type_id')
            ->references('id')
            ->on('dependency_types')
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
    Schema::dropIfExists('dependencies');
  }
};
