<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pilot extends Model
{
    //
    public function person()
    {
        return $this->belongsTo('App\Person');
    }
}
