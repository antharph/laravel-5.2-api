<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];

    public function car_brand()
    {
        return $this->belongsTo('App\CarBrand','car_brand_id');
    }

    public function services()
    {
        return $this->belongsToMany('App\Service','service_logs')
        ->withPivot('details', 'amount')
        ->withTimestamps();
    }

    public function expenses()
    {
        return $this->belongsToMany('App\Expense','car_expenses')
        ->withPivot('details', 'amount')
        ->withTimestamps();
    }

    public function service_reminders()
    {
        return $this->belongsToMany('App\ServiceReminder','service_reminders')
        ->withPivot('base_odometer', 'base_date','odometer', 'days','priority', 'status')
        ->withTimestamps();
    }

    public function expense_reminders()
    {
        return $this->belongsToMany('App\ExpenseReminder','expense_reminders')
        ->withPivot('base_odometer', 'base_date','odometer', 'days','priority', 'status')
        ->withTimestamps();
    }
}
