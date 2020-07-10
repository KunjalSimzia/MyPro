<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orderproduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('OrderProduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('oID')->unsigned();
            $table->foreign('oID')->references('id')->on('Order');
            $table->integer('pID');
            $table->integer('quantity')->nullable();
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
        Schema::drop('OrderProduct');
    }
}
