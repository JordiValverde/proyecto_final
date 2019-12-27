<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    //
    public function planes()
    {
        return $this->hasMany('App\Plane');
    }
    public function passengers()
    {
        return $this->hasMany('App\Passenger');
    }
    public function pilots()
    {
        return $this->hasMany('App\Pilot');
    }
    public function cities()
    {
        return $this->hasMany('App\City');
    }
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }
}
