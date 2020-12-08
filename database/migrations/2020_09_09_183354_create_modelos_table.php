<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sku');
            $table->text('denominacion');
            $table->integer('color_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('color_id')->references('id')->on('Colors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modelos');
    }
}
