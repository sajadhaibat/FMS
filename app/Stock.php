<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Vendorlist;
use App\CustomerSales;
use App\Bill;

class Stock extends Model
{
  public function bill()
               {
                   return $this->hasOne(Bill::class);
                }

  public function vendor()
     {
         return $this->belongsTo(Vendorlist::class);
     }

    public function customersales()
         {
             return $this->hasMany(CustomerSales::class);
          }

    public function buyandsaleothercustomers()
    {
        return $this->hasMany(BuyandSaleOtherCustomer::class);
    }

          

}
