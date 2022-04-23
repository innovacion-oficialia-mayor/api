<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla payroll_types_categories
   * de las base de datos de Administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('payroll_types_categories', function (Blueprint $table) {
      $table->tinyIncrements('id');

      $table->unsignedTinyInteger('payroll_type_id');

      $table->unsignedTinyInteger('payroll_category_id')
            ->nullable();

      $table->unique(['payroll_type_id', 'payroll_category_id'], 'payroll_types_categories_unique');

      $table->foreign('payroll_type_id')
            ->references('id')
            ->on('payroll_types')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->foreign('payroll_category_id')
            ->references('id')
            ->on('payroll_categories')
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
    Schema::dropIfExists('payroll_types_categories');
  }
};
