<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plane extends Model
{
    //
    public function flight()
    {
        return $this->belongsTo('App\Flight');
    }
}
