<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarBrand extends Model
{
    protected $guarded = [];

    public function cars()
    {
        return $this->hasMany('App\Car','car_brand_id');
    }
}
