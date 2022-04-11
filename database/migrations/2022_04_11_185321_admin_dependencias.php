<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla dependencias
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('dependencias', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')->primary();
      $table->string('nombre', 255)->unique();

      $table->unsignedTinyInteger('id_tipo_dependencia');

      $table->foreign('id_tipo_dependencia')
        ->references('id')->on('tipos_dependencia')
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
    Schema::dropIfExists('dependencias');
  }
};
