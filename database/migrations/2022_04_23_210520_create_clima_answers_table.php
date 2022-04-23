<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla answers
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('answers', function (Blueprint $table) {
      $table->uuid('id')
            ->primary();

      $table->foreignUuid('survey_id')
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $db = DB::connection('admin')->getDatabaseName();

      $table->foreignUuid('user_id')
            ->constrained($db.'.users')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedSmallInteger('question_option_id');

      $table->foreign('question_option_id')
            ->references('id')
            ->on('question_options')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('question_id');

      $table->foreign('question_id')
            ->references('question_id')
            ->on('question_options')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unique(['survey_id', 'user_id', 'question_id']);
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('answers');
  }
};
