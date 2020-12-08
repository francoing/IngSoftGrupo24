<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParDeSegundasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('par_de_segundas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('totalSegunda');
            $table->integer('linea_id')->unsigned();
            $table->integer('supervisor_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('linea_id')->references('id')->on('linea_de_produccions');
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
        Schema::drop('par_de_segundas');
    }
}
