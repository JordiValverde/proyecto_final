<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public function pilot()
    {
        return $this->hasOne('App\Pilot');
    }
    public function passenger()
    {
        return $this->hasOne('App\Passenger');
    }
}
