<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id','trip_id','seats_number'];

    public function trip()
    {
        return $this->belongsTo('App\Trip','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','id');
    }
}
