<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
    protected $fillable = ['carOwner_id','car_number', 'car_model','car_type','seats_number'];


    public function carOwner()
    {
        return $this->belongsTo('App\CarOwner','id');
    }

    public function trip()
    {
        return $this->hasOne('App\Trip','car_id');
    }


}
