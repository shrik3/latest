<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('photos',function(Blueprint $table){
            $table->increments('id');
            $table->string('title',400)->default('');
            $table->string('image',400)->default('');
            $table->timestamps();
            $table->integer('owner_type');
            $table->integer('owner_id');
        }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('photos');
        //
    }
}
