<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function services()
    {
        return $this->belongsToMany('App\Service','service_logs');
    }

    public function expenses()
    {
        return $this->belongsToMany('App\Expense','car_expenses');
    }

    public function service_reminders()
    {
        return $this->belongsToMany('App\ServiceReminder','service_reminders');
    }

    public function expense_reminders()
    {
        return $this->belongsToMany('App\ExpenseReminder','expense_reminders');
    }
}
