<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla preguntas
   * de la base de datos de clima laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('preguntas', function (Blueprint $table) {
      $table->unsignedTinyInteger('id')
            ->primary();

      $table->unsignedTinyInteger('id_categoria');

      $table->foreign('id_categoria')
            ->references('id')
            ->on('categorias')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->string('cuerpo', 560)
            ->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('preguntas');
  }
};
