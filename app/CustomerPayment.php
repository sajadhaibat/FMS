<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Customer;


class CustomerPayment extends Model
{

  public function customer(){

    return $this->belongsTo(Customer::class);

  }


}
