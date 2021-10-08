<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bomba extends Model
{
    public function posto(){
        return $this->hasOne(Posto::class, 'id', 'posto_id');
    }

//-----------------------------------------------------------
    public function bico(){
        return $this->hasMany(Bico::class, 'bico_id', 'id');
    }

//-----------------------------------------------------------
  /*  public function leituraBomba(){
        return $this->hasOne(Leitura::class, 'bomba_id', 'id');
    }
  */ 
}
