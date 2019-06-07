<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class misusuarios extends Model
{
    public function direcciones(){
        return $this ->hasMany('App\direcciones'); 
    }
}
