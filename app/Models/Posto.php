<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posto extends Model
{
    public function contrato()
    {
    return $this->belongsTo(Contrato::class, 'contrato_id', 'id');
    }
//-----------------------------------------------------------------

    public function bomba()
    {
    return $this->hasMany(Bomba::class, 'bomba_id', 'id');
    }
//-----------------------------------------------------------------


}
