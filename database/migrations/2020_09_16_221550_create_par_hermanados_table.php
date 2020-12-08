<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParHermanadosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('par_hermanados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hermanado');
            $table->integer('supervisor_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->integer('op_id')->unsigned();
            $table->integer('modelo_id')->unsigned();
            $table->integer('color_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('supervisor_id')->references('id')->on('logins');
            $table->foreign('linea_id')->references('id')->on('linea_de_produccions');
            $table->foreign('op_id')->references('id')->on('orden_de_produccions');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('color_id')->references('id')->on('colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('par_hermanados');
    }
}
