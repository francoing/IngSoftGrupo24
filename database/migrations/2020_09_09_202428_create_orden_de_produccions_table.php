<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDeProduccionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_de_produccions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tiempoInicio');
            $table->string('estado');
            $table->string('numOP');
            $table->integer('linea_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('linea_id')->references('id')->on('Linea_de_produccions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orden_de_produccions');
    }
}
