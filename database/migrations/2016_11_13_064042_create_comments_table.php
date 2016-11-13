<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create a table named 'comments'
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id'); //Generate a unique ID for each comment
            $table->string('comment_txt'); //record the comment
            $table->integer('hotel_id')->unsigned();  //record the hotel_id 
            $table->integer('fk_user_id'); //record the user who created this entry
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
