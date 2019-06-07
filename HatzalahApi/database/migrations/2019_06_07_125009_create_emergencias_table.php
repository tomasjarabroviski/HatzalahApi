<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencias', function (Blueprint $table) {
            $table->bigInteger('idEmergencia');
            $table->bigInteger('idReportante');
            $table->bigInteger('idVictima');
            $table->boolean('llegado');
            $table->boolean('ambulancia');
            $table->bigInteger('apoyoDePersonas');
            $table->boolean('terminado');
            $table->bigInteger('idEstadoDeEmergencia');
            $table->dateTime('fechaYhora');
            $table->string('direccion');
            $table->float('calificacionAPP');
            $table->float('calificacionpRROF');
            $table->string('observaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergencias');
    }
}
