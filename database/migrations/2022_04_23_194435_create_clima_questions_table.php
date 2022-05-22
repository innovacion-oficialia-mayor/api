<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla questions
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('questions', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->unsignedTinyInteger('factor_id');

      $table->foreign('factor_id')
            ->references('id')
            ->on('factors')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->string('body', 1024);
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('questions');
  }
};
