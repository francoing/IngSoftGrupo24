<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRevisionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('revisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pie');
            $table->integer('defecto_id')->unsigned();
            $table->integer('supervisor_id')->unsigned();
            $table->integer('linea_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('defecto_id')->references('id')->on('defectos');
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
        Schema::drop('revisions');
    }
}
