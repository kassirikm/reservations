<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste_type_show extends Model
{
    //
}

public function artist_type()
{
    return $this->belongsTo('App\Artiste_type');
}
public function shows()
{
    return $this->belongsTo('App\shows');
}