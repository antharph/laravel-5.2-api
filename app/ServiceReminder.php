<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceReminder extends Model
{
    protected $table = 'service_reminders';
    protected $guarded = [];

    public function service()
    {
        return $this->belongsTo('App\Service');
    }
}
