<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMisusuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('misusuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->bigInteger('dniusuario');
            $table->string('nombreUsuario');
            $table->string('apellidoUsuario');
            $table->bigInteger('telefonoUsuario');
            $table->string('mailUsuario');
            $table->string('contrasenaUsuario'); 
            $table->boolean('alta'); 
            $table->string('fotoUsuario'); 
            $table->date('fechaNacimientoUsuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('misusuarios');
    }
}
