<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;
use App\Customer;

class CustomerSales extends Model
{

  public function stock(){

    return $this->belongsTo(Stock::class);
}

public function customer(){

  return $this->belongsTo(Customer::class);

}

    public function buyandsales(){

        return $this->hasMany(BuyandSale::class);

    }
    public function buyandsaleothercustomers(){

        return $this->hasMany(BuyandSaleOtherCustomer::class);

    }
}
