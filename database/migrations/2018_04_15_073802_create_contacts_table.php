<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() 
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('facebook');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->string('email');
            $table->string('location');
            $table->longText('map_url');
            $table->string('twitter');
            $table->string('youtube');
            $table->string('instagram');
            $table->tinyInteger('published')->default(0);
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
        Schema::dropIfExists('contacts');
    }
}
