<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localities extends Model
{
    //
}

public function locations()
{
    return $this->hasMany('App\Locations');
}