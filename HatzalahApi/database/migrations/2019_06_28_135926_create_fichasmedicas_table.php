<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasmedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichasmedicas', function (Blueprint $table) {
            $table->bigIncrements('idFicha');
            $table->bigInteger('idUsuario');
            $table->string('tipoDeSangre'); 
            $table->string('alergias'); 
            $table->string('med');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fichasmedicas');
    }
}
