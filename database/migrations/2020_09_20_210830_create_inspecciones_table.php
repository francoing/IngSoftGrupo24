<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspeccionesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspecciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supervisor_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('supervisor_id')->references('id')->on('logins');
            $table->foreign('linea_id')->references('id')->on('linea_de_produccions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inspecciones');
    }
}
