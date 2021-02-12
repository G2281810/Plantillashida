<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function(Blueprint $table){
            $table->increments('idpaci');
            $table->string('nombre',40);
            $table->string('apellidop',40);
            $table->string('apellidom',40);
            $table->string('sexo',1);
            $table->string('edad',3);
            $table->integer('idtipossan')->unsigned();
            $table->foreign('idtipossan')->references('idtipossan')->on('tipo_sangre');
            $table->string('telefono',10);
            $table->string('correo',40);
            $table->string('preguntaale',1);
            $table->string('alergias',150);
            $table->string('activo',1);
            $table->rememberToken();
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
        Schema::drop('pacientes');
    }
}
