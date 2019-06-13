<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyandSale extends Model
{
    //
    public function customersale(){

        return $this->belongsTo(CustomerSales::class);

    }
    public function buyandsalecustomer(){

        return $this->belongsTo(BuyandSaleCustomers::class);

    }
}
