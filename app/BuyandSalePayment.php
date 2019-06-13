<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyandSalePayment extends Model
{
    //
    public function buyandsalecustomer(){

        return $this->belongsTo(BuyandSaleCustomers::class);

    }
}
