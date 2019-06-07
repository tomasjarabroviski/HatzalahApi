<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class direcciones extends Model
{
    public function misusuarios(){
        return $this->belongsTo('App\misusuarios');
    }
}

