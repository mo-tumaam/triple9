<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->integer('salary');
            $table->integer('balance')->nullable();
            $table->integer('tin')->unique()->nullable();
            $table->String('address');
            $table->String('contact');
            $table->String('position');
            //$table->foreignId('item_id')->constrained();
            // $table->integer('items_id')->unsigned();
            //$table->foreign('item_ids')->refrences('id')->on('items');
            $table->date('startDate')->timestamps();
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
        Schema::dropIfExists('categories');
    }
}
