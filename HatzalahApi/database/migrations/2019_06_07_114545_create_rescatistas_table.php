<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRescatistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescatistas', function (Blueprint $table) {
            $table->bigIncrements('idRescatista');
            $table->bigInteger('dniRescatista');
            $table->string('nombreRescatista');
            $table->string('apellidoRescatista');
            $table->bigInteger('telefonoRescatista');
            $table->string('direccionRescatista');    
            $table->string('contrasenaRescatista'); 
            $table->date('ultCapTem');
            $table->date('ultCapTora');
            $table->date('ultCapCruzRoja');
            $table->boolean('online');
            $table->string('ubicacionLat');
            $table->string('ubicacionLon'); 
            $table->date('proximaCap');
            $table->string('fotoRescatista'); 
            $table->string('mailRescatista'); 
            $table->date('fechaNacimientoRescatista');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rescatistas');
    }
}
