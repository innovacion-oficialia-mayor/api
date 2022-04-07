<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla tipos_dependencia
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('tipos_dependencia', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')->primary();
      $table->string('nombre', 20)->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('tipos_dependencia');
  }
};
