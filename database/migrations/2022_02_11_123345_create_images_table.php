<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produtos_id');
            $table->string('name', 50);
            $table->string('size', 10);
            $table->string('alt', 50);
            $table->string('description', 50);
            $table->string('url', 50);
            $table->timestamps();
            

            //constraints
            $table->foreign('produtos_id')->references('id')->on('produto1s');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
