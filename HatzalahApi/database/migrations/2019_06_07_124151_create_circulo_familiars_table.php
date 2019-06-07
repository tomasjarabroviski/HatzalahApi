<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCirculoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circulo_familiars', function (Blueprint $table) {
            $table->bigIncrements('idCirculoFamiliar');
            $table->bigInteger('idUsuario');
            $table->bigInteger('idFamiliar');
            $table->string('color');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('circulo_familiars');
    }
}
