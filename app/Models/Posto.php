<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    public function contrato(){
        return $this->hasOne(Contrato::class, 'id', 'contrato_id');
    }

    public function gerente(){
        return $this->hasOne(User::class, 'id', 'user_id');
    }
//-----------------------------------------------------------------

    public function bomba(){
        return $this->hasMany(Bomba::class, 'bomba_id', 'id');
    }

    public function turno(){
        return $this->hasMany(Turno::class, 'turno_id', 'id');
    }
//-----------------------------------------------------------------


}
