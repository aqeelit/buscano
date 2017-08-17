<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarOwner extends Model
{
    protected $fillable = ['user_id','property_number','owner_name','licence_number','licence_type'];

    public function user()
    {
        return $this->belongsTo('App\user','user_id');
    }

    public function car()
    {
        return $this->hasOne('App\Car','carOwner_id');
    }
}
