<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Formularios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
                                              //TABLA FORMULARIOS
        //RELACIONADA CON:
        //TABLA: (FK)sexos->id ,...

        Schema::create('formularios', function (Blueprint $table) {

            $table->increments('id_forms');// ID FORMULARIO (PK)

            $table->integer('sexo')->unsigned();// SEXO (FK)         
            $table->foreign('sexo')->references('id')->on('sexos');

            $table->string('pnombre', 100);//PRIMER NOMBRE

            $table->string('snombre', 100);//SEGUNDO NOMBRE

            $table->string('nom_usuario', 100)->unique();//NOMBRE DE USUARIO (UNICO)->LOS NOMBRES DE USUARIOS DEBEN DE SER UNICOS

            $table->string('ciudad', 100);//CIUDAD

            $table->string('estado', 100);//ESTADO 

            $table->string('status', 2);//ESTATUS, 'S' SE MUESTRA EL REGISTRO        EN SUS DEFECTOS PUEDE SER USUARIO ACTIVO O NO ACTIVO
                                                // 'N' NO SE MUESTRA EL REGISTRO

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
        Schema::dropIfExists('formularios');
    }
}
