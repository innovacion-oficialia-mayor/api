<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla niveles
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('niveles', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')->primary();
      $table->string('nombre', 5)->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('niveles');
  }
};
