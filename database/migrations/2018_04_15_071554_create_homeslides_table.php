<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeslidesTable extends Migration
{
    /** 
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homeslides', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover_image');
            $table->string('title_white');
            $table->string('title_red');
            $table->longText('description');
            $table->string('button_link');
            $table->string('button_text');
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
        Schema::dropIfExists('homeslides');
    }
}
