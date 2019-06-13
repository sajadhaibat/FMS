<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdvanceSalary extends Model
{
    //
    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}
