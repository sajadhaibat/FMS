<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exchange extends Model
{
    //
    public function exchangerpayments(){

        return $this->hasMany(ExchangerPayment::class);
    }

    public function payments(){

        return $this->hasMany(PaymentToExchanger::class);
    }

}
