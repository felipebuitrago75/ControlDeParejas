<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionParejaMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pareja', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fechaRegistro');
            $table->date('fechaInicioPreparacion');
            $table->string('factoresProtectivos');
            $table->string('factoresRiesgo');
            $table->string('diagnostico');
            $table->string('presuntivo');
            $table->string('recomendaciones');
            $table->string('entrevistador');
            $table->integer('hijosPareja');
            $table->string('tiempoRelacion');
            $table->string('tipoRelacion');
            $table->string('seCaso');
            $table->date('fechaMatrimonio');
            $table->string('parroquia');
            $table->string('comentarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pareja');
    }
}
