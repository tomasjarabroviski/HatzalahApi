<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fichasmedicas extends Model
{
    public function misusuarios(){
        return $this->belongsTo('App\misusuarios');
    }
    protected $primaryKey = 'idFicha';
       public $timestamps = false;
}
