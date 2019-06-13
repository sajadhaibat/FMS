<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuyandSaleOtherCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buyand_sale_other_customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->integer('stock_id');
            $table->integer('customersale_id');
            $table->integer('customer_quantity');
            $table->integer('price_per_item');
            $table->integer('total_price');
            $table->integer('paid_amount');
            $table->integer('loan_amount');
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
        Schema::dropIfExists('buyand_sale_other_customers');
    }
}
