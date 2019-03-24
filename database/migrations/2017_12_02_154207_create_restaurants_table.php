<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('restaurant_id');
            $table->string('restaurant_name');
            $table->string('type');
            $table->string('description');
            $table->integer('rating');
            $table->string('address');
            $table->string('city');
            $table->string('phone');
            $table->string('email');
            $table->string('image');
            $table->string('map');
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
        Schema::drop('restaurants');
    }
}
