<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Representation_user extends Model
{
    //
}

public function users()
{
    return $this->belongsTo('App\Users');
}