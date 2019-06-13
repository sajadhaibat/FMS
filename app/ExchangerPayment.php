<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangerPayment extends Model
{
    //
    public function exchange(){

        return $this->belongsTo(Exchange::class);

    }

}
