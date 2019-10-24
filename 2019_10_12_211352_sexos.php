<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sexos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexos', function (Blueprint $table) {

                                             //TABLA SEXOS (SEXO)
        //RELACIONADA CON:
        //TABLA: formularios->sexo ,...

            $table->increments('id');// ID SEXO

            $table->string('descripcion', 8);// HOMBRE / MUJER
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sexos');
    }
}
