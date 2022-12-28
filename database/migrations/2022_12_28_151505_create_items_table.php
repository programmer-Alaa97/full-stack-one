<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price');
            $table->timestamps();

            $table->bigInteger( 'categoryID' )->unsigned();
            $table->foreign('categoryID')->references('id')->on('categories')->onDUpdate('cascade')->onDelete('cascade');
             
            $table->bigInteger( 'userID' )->unsigned();
            $table->foreign('userID')->references('id')->on('users')->onDUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}