<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ledger_id')->constrained();
            $table->foreignId('sub_id')->constrained();
           $table->foreignId('category_id')->constrained();
             $table->foreignId('allclient_id')->constrained();
            $table->String('container')->nullable();
            $table->String('owner')->nullable();
             $table->String('destination')->nullable();
              $table->integer('rate')->nullable();
              
             $table->date('date')->timestamps();
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
        Schema::dropIfExists('trips');
    }
}
