<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pID')->unsigned();
            $table->foreign('pID')->references('id')->on('Product');
            $table->string('cID');
            // $table->string('productname');
            // $table->string('price');
            $table->string('quantity')->nullable();
            // $table->string('desc');
            // $table->binary('image');
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
        Schema::drop('Cart');
    }
}
