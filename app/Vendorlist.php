<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stock;
use App\Item;

class Vendorlist extends Model
{

  public function stocks()
   {
       return $this->hasMany(Stock::class);
   }

   public function items()
    {
        return $this->hasMany(Item::class);
    }
    public function vendorpayments(){

        return $this->hasMany(VendorPayment::class);
    }


}
