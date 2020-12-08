<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParDePrimerasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('par_de_primeras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('primera');
            $table->integer('supervisor_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->integer('op_id')->unsigned();
            $table->integer('modelo_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('supervisor_id')->references('id')->on('logins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('par_de_primeras');
    }
}
