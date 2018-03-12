<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->belongsToMany('App\Car','service_logs');
    }

    public function service_reminders()
    {
        return $this->belongsToMany('App\ServiceReminder','service_reminders');
    }
}
