<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyandSalePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyand_sale_payments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('buyandsalecustomer_id');
            $table->bigInteger('total_amount');
            $table->bigInteger('paid_amount');
            $table->longText('description');
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
        Schema::dropIfExists('buyand_sale_payments');
    }
}
