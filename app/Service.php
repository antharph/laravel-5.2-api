<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany('App\Car','service_logs')
        ->withPivot('details', 'amount')
        ->withTimestamps();
    }

    public function reminders()
    {
        return $this->belongsToMany('App\ServiceReminder','service_reminders')
        ->withPivot('base_odometer', 'base_date','odometer', 'days','priority', 'status')
        ->withTimestamps();
    }
}
