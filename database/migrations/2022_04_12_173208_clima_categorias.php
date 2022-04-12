<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla categorias
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('categorias', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')
            ->primary();

      $table->unsignedTinyInteger('id_rubro');

      $table->foreign('id_rubro')
            ->references('id')
            ->on('rubros')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->string('nombre', 255)
            ->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('categorias');
  }
};
