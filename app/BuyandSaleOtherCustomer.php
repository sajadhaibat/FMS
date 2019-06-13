<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuyandSaleOtherCustomer extends Model
{
    //
    public function customersale(){

        return $this->belongsTo(CustomerSales::class);

    }
    public function customer(){

        return $this->belongsTo(Customer::class);

    }
    public function stock(){

        return $this->belongsTo(Stock::class);

    }
}
