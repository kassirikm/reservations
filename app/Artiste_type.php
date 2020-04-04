<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artiste_type extends Model
{
    
}

public function artiste_type_show()
{
    return $this->hasMany('App\Artiste_type_show');
}

public function artists()
{
    return $this->belongsTo('App\Artist');
}

public function types()
{
    return $this->belongsTo('App\Types');
}
