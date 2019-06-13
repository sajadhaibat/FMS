<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyandSaleCustomers extends Model
{
    //


    public function buyandsales(){
        return $this->hasMany(BuyandSale::class);

    }
    public function buyandsalepayments(){
        return $this->hasMany(BuyandSalePayment::class);

    }
}
