<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla payroll_categories
   * de las base de datos de Administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('payroll_categories', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->string('name', 24)
            ->unique();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('payroll_categories');
  }
};
