<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentToExchanger extends Model
{
    //

    public function exchange(){

        return $this->belongsTo(Exchange::class);

    }
}
