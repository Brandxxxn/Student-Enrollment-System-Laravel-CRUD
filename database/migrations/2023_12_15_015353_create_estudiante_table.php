<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Estudiante', function (Blueprint $table) {
            $table->integer('id_estudiante')->primary();
            $table->string('nombre_estudiante', 255);
            $table->string('apellido_estudiante', 255);
            $table->date('fecha_nacimiento');
            $table->text('direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
};
