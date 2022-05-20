<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
  * Ejecuta la migración de la tabla users
   * de las base de datos de Administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('users', function (Blueprint $table) {
      $table->uuid('id')
            ->primary();

      $table->string('payroll', 10)
            ->unique();

      $table->string('email', 255)
            ->nullable()
            ->unique();

      $table->unsignedTinyInteger('role_id');

      $table->foreign('role_id')
            ->references('id')
            ->on('roles')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('gender_id');

      $table->foreign('gender_id')
            ->references('id')
            ->on('genders')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('job_id');

      $table->foreign('job_id')
            ->references('id')
            ->on('jobs')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('job_level_id');

      $table->foreign('job_level_id')
            ->references('id')
            ->on('job_levels')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('payroll_type_category_id');

      $table->foreign('payroll_type_category_id')
            ->references('id')
            ->on('payroll_types_categories')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedSmallInteger('dependency_area_id');

      $table->foreign('dependency_area_id')
            ->references('id')
            ->on('dependency_areas')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->string('fullname', 255);

      $table->string('phone', 10);

      $table->string('password', 255)
            ->nullable();

      $table->boolean('active')
            ->default(false);

      $table->date('entered_at');

      $table->dateTime('created_at')
            ->useCurrent();

      $table->dateTime('updated_at')
            ->useCurrent()
            ->useCurrentOnUpdate();
    });
  }

  /**
   * Invierte la migración.
   *
   * @return void
   */
  public function down() {
    Schema::dropIfExists('users');
  }
};
