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
            $table->bigInteger('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table-> dateTime('ultCapTem');
            $table-> dateTime('ultCapTora');
            $table-> dateTime('ultCapCruzRoja');
            $table->boolean('online ');
            $table->string('ubicacionLat');
            $table->string('ubicacionLon');
            $table-> dateTime('prxomaCap');
            $table->string('foto')->comment('Ver que variable para imagen');

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
