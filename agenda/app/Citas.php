<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    protected $table = 'citas';
    
    public function clientes() {
        return $this->belongsTo('App\Clientes');
        
    }
    
    public function agendas() {
        return $this->belongsTo('App\Agenda');
        
    }
}
