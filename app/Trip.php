<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = ['car_id','trip_day' ,
            'seat_price',
            'seats_number',
            'from',
            'to',
            'start_date',
            'arrive_date'
    ];

    public function car()
    {
        return $this->belongsTo('App\Car');
    }


    public function booking()
    {
        return $this->hasMany('App\Booking','trip_id');
    }
}
