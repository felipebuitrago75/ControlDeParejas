<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreacionIntegrantesMigracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrante', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('telefono');
            $table->string('direccion');
            $table->string('ActividadLaboral');
            $table->integer('edad');
            $table->string('escolaridad');
            $table->string('carrera');
            $table->string('email');
            $table->integer('relacionesAnteriores');
            $table->integer('numeroHijos');
            $table->string('fortalezaAntecedentes');
            $table->string('debilidadAntecedentes');
            $table->string('adiccionesAntecedentes');
            $table->string('vinculoPadres');
            $table->string('religionPadres');
            $table->string('apruebanPadres');
            $table->string('convivenciaActual');
            $table->string('vivenciaFe');
            $table->string('conceptoDios');
            $table->string('conceptoIglesia');
            $table->string('participacionOtrosCultos');
            $table->string('queRechazaIglesia');
            $table->string('motivoMatrimonio');
            $table->integer('genero');
            $table->integer('idPareja');
            $table->string('fotoPersona');
            $table->integer('pareja_id')->unsigned();
            $table->foreign('pareja_id')->references('id')->on('pareja');
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
        Schema::drop('integrante');
    }
}
