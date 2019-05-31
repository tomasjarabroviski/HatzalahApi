<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('idUsuario');
            $table->bigInteger('dni');
            $table->string('nombre');
            $table->string('apellido');
            $table->bigInteger('telefono');
            $table->string('mail');
            $table->string('contrasena');
            $table->string('tiposangre');
            $table->string('alergias');
            $table->string('medicacion');
            $table->boolean('alta');
            $table->string('foto')->comment('Ver que variable para imagen');
            $table-> dateTime('fechaNaciemiento');
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
