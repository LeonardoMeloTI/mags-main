<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bomba extends Model
{
    public function bomba()
    {
    return $this->belongsTo(Posto::class, 'bomba_id', 'id');
    }

//-----------------------------------------------------------
    public function bico()
    {
    return $this->hasMany(Bico::class, 'bomba_id', 'id');
    }

//-----------------------------------------------------------
    public function leituraBomba()
    {
    return $this->hasOne(Leitura::class, 'bomba_id', 'id');
    }
    
}
