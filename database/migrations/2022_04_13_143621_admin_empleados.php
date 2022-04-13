<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Ejecuta la migración de la tabla empleados
   * de la base de datos de administración.
   *
   * @return void
   */
  public function up() {
    Schema::create('empleados', function (Blueprint $table) {
      $table->uuid('id');

      $table->string('nomina', 10)
            ->unique();

      $table->string('email', 255)
            ->unique()
            ->nullable();

      $table->unsignedTinyInteger('id_rol');

      $table->foreign('id_rol')
            ->references('id')
            ->on('roles')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('id_puesto');

      $table->foreign('id_puesto')
            ->references('id')
            ->on('puestos')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('id_nivel_puesto')
            ->nullable();

      $table->foreign('id_nivel_puesto')
            ->references('id')
            ->on('niveles_puesto')
            ->restrictOnUpdate()
            ->restrictOnDelete();

      $table->unsignedTinyInteger('id_tipo_categoria_nomina');

      $table->foreign('id_tipo_categoria_nomina')
            ->references('id')
            ->on('tipos_categorias_nomina')
            ->restrictOnUpdate();

      $table->unsignedSmallInteger('id_area_dependencia');

      $table->foreign('id_area_dependencia')
            ->references('id')
            ->on('areas_dependencias')
            ->restrictOnUpdate();

      $table->string('nombre', 60);

      $table->string('apellido_paterno', 60);

      $table->string('apellido_materno', 60);

      $table->string('telefono', 10);

      $table->string('contrasena', 255)
            ->nullable();

      $table->boolean('activo')
            ->default(false);

      $table->date('fecha_ingreso');

      $table->dateTime('fecha_registro')
            ->useCurrent();

      $table->dateTime('fecha_actualizacion')
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
    Schema::dropIfExists('empleados');
  }
};
