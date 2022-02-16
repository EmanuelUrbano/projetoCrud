<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduto1sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto1s', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->text('description') -> nullable();
            $table->float('price')->default(0.01);
            $table->unsignedBigInteger('category_id')->default(1);
            $table->integer('quantity')->default(1);
            $table->timestamps();
            
            //constraints
            $table->foreign('category_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto1s');
    }
}
