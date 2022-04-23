<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
  * Ejecuta la migración de la tabla factors
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('factors', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->unsignedTinyInteger('heading_id');

      $table->foreign('heading_id')
            ->references('id')
            ->on('headings')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->string('name', 255)
            ->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('factors');
  }
};
