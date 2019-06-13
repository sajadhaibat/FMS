<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\CustomerSales;
use App\CustomerPayment;

class Customer extends Model
{

  public function customersales(){

    return $this->hasMany(CustomerSales::class);
  }

  public function customerpayments(){

    return $this->hasMany(CustomerPayment::class);
  }

    public function buyandsaleothercustomers(){

        return $this->hasMany(BuyandSaleOtherCustomer::class);
    }

}
