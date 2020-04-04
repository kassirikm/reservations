<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shows extends Model
{
    //
}

public function artist_type_show()
{
    return $this->hasMany('App\Artiste_type_show');

}

public function locations()
{
    return $this->belongsTo('App\Locations');
}