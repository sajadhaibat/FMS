<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangerPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchanger_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exchanger_id');
            $table->integer('ex_paid_amount');
            $table->date('date');
            $table->string('persiandate');
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
        Schema::dropIfExists('exchanger_payments');
    }
}
