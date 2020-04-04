<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
}

public function Representation_user()
{
    return $this->hasMany('App\representation_user');
}

public function roles()
{
    return $this->belongsTo('App\Roles');
}