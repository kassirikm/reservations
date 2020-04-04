<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = ['firstname', 'lastname'];
}

public function artiste_type()
{
    return $this -> hasMany('App\Artiste_type');
}