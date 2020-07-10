<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
        public function up()
        {
            Schema::create('Product', function (Blueprint $table) {
                $table->increments('id');
                $table->string('productname');
                $table->string('price');
                $table->string('desc');
                $table->binary('image');
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
            Schema::drop('Product');
        }
    }
