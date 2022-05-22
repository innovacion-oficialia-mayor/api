<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla options
   * de las base de datos de Clima Laboral.
   *
   * @return void
   */
  protected $connection = 'clima';

  public function up() {
    Schema::create('options', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->string('body', 256)
            ->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('options');
  }
};
