<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany('App\Car','car_expenses')
        ->withPivot('details', 'amount')
        ->withTimestamps();
    }

    public function reminders()
    {
        return $this->belongsToMany('App\ExpenseReminder','expense_reminders')
        ->withPivot('base_odometer', 'base_date','odometer', 'days','priority', 'status')
        ->withTimestamps();
    }
}
