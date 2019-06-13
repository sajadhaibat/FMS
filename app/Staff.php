<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function salaries()
    {
        return $this->hasMany(Salary::class);
    }
    public function advancesalaries()
    {
        return $this->hasMany(AdvanceSalary::class);
    }

    public function dailyexpenses()
    {
        return $this->hasMany(DailyExpense::class);
    }
}
