<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateHowToTagsTable extends Migration
{
    public function up()
    {
        Schema::create('how_to_tags', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('how_to_tags');
    }
}
