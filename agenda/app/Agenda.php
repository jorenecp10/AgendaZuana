<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table = 'agenda';
    
    public function citas() {
        return $this->hasMany('App\Citas');
        
    }
}
