<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla question_options
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('question_options', function (Blueprint $table) {
      $table->smallIncrements('id');

      $table->unsignedTinyInteger('question_id');

      $table->unsignedTinyInteger('option_id');

      $table->unique(['question_id', 'option_id']);

      $table->foreign('question_id')
            ->references('id')
            ->on('questions')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->foreign('option_id')
            ->references('id')
            ->on('options')
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
    Schema::dropIfExists('question_options');
  }
};
