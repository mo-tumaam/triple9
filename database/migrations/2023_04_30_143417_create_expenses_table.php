<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id();
              $table->foreignId('ledger_id')->constrained();
            $table->foreignId('sub_id')->constrained();
           $table->foreignId('trip_id')->constrained();
           $table->foreignId('account_id')->constrained();
             $table->integer('amount');
              $table->integer('remark')->nullable();
             $table->date('date');
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
        Schema::dropIfExists('expenses');
    }
}
