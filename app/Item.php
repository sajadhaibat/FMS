<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Vendorlist;

class Item extends Model
{
  public function vendor()
     {
         return $this->belongsTo(Vendorlist::class);
     }
}
