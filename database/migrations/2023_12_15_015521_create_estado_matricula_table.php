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
        Schema::create('Estado_Matricula', function (Blueprint $table) {
            $table->integer('id_estado')->primary();
            $table->string('nombre', 100);
            $table->integer('id_matricula');

            $table->foreign('id_matricula')->references('id_matricula')->on('Matriculas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estado_matricula');
    }
};
