<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
}

public function representations()
{
    return $this->hasMany('App\Representations');
}
public function shows()
{
    return $this->hasMany('App\Shows');
}

public function localities()
{
    return $this->belongsTo('App\Localities');
}