<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stock_id');
            $table->string('commission');
            $table->string('mercenary');
            $table->string('monshiana');
            $table->string('market_fee');
            $table->string('total_spent');
            $table->string('kham_afghani');
            $table->string('pakha_afghani');
            $table->string('pakha_kaldar');
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
        Schema::dropIfExists('bills');
    }
}
