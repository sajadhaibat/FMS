<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('vendor_name');
            $table->string('item');
            $table->string('customer_quantity');
            $table->string('price_per_item');
            $table->string('total_price');
            $table->string('paid_amount');
            $table->string('loan_amount');
            $table->string('date');
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
        Schema::dropIfExists('customer_sales');
    }
}
