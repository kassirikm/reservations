<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representations extends Model
{
    //
}

public function representation_user()
{
    return $this->hasMany('App\Representation_user');
}

public function shows()
{
    return $this->belongsTo('App\Shows');
}

public function locations()
{
    return $this->belongsTo('App\Locations');
}