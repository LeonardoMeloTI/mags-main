<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Bico extends Model
{
    public function bomba()
    {
    return $this->belongsTo(Bomba::class, 'bomba_id', 'id');
    }
    
//-----------------------------------------------------------
    public function leituraBico()
    {
    return $this->hasOne(Leitura::class, 'bico_id', 'id');
    }
}
