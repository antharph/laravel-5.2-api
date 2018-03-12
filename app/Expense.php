<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany('App\Car','car_expenses');
    }

    public function reminders()
    {
        return $this->belongsToMany('App\ExpenseReminder','expense_reminders');
    }
}