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
        Schema::create('Matriculas', function (Blueprint $table) {
            $table->integer('id_matricula')->primary();
            $table->integer('id_estudiante');
            $table->integer('id_curso');
            $table->date('fecha_matricula');

            $table->foreign('id_estudiante')->references('id_estudiante')->on('Estudiante');
            $table->foreign('id_curso')->references('id_curso')->on('Materia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas');
    }
};
