<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineaDeProduccionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('linea_de_produccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigoLinea_de_produccion');
            $table->string('ocupacion');//estado de la linea libre u ocupada
            $table->string('asigOP');//asigancion de op asiganada o sin asiganar
            $table->integer('modelo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('modelo_id')->references('id')->on('Modelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('linea_de_produccions');
    }
}
