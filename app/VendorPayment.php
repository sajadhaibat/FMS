<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VendorPayment extends Model
{
    //
    public function vendor(){

        return $this->belongsTo(Vendorlist::class);

    }
}
