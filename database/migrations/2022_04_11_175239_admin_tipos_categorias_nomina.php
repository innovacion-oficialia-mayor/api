<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla tipos_categorias_nomina
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('tipos_categorias_nomina', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')
            ->primary();

      $table->unsignedTinyInteger('id_tipo_nomina');

      $table->foreign('id_tipo_nomina')
            ->references('id')
            ->on('tipos_nomina')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('id_categoria_nomina')
            ->nullable();

      $table->foreign('id_categoria_nomina')
            ->references('id')
            ->on('categorias_nomina')
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
    Schema::dropIfExists('tipos_categorias_nomina');
  }
};
