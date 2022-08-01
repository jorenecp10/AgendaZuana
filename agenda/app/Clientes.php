<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    
    public function citas() {
        return $this->hasMany('App\Citas');
        
    }
}
