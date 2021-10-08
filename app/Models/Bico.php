<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bico extends Model
{
    public function bomba(){
        return $this->hasOne(Bomba::class, 'id', 'bomba_id');
    }
    
//-----------------------------------------------------------
    public function leitura(){
        return $this->hasMany(Leitura::class, 'bico_id', 'id');
    }
}
