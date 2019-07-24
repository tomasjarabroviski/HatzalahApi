<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class circuloFamiliar extends Model
{
    public function misusuarios(){
        return $this->belongsTo('App\misusuarios');
    }
    public $timestamps = false;
    protected $primaryKey = 'idCirculoFamiliar';
}
