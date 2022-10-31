<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AdminSide extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function($table){
            $table->increments('category_id');
            $table->string('category_name',200);
            $table->string('category_description',2000);
        });

        Schema::create('movie', function($table){
            $table->increments('movie_id');
            $table->string('movie_name',200);
            $table->string('movie_description',3000);
            $table->string('release_date',200);
            $table->string('director',200);
            $table->string('main_character',200);
            $table->string('price',200);
            $table->string('movie_img',2000);
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('category_id')->on('category');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
