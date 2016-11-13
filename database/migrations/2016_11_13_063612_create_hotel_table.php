<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //create a table named 'hotels'
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id'); //Generate a unique ID for each hotel
            $table->string('name')->unique(); //record the name of each hotel and it is supposed to be unique
            $table->string('location');  //record the location of this hotel
            $table->integer('fk_user_id')->unsigned()->index(); //record the user who created this entry
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
        Schema::dropIfExists('hotels');
    }
}
