<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Posto;

class Contrato extends Model
{
    use HasFactory;
    
    public function posto(){
        return $this->belongsTo(Posto::class, 'id', 'contrato_id'); // Não é posto id,e sim contrato_id
    }

    public function proprietario(){
        return $this->hasOne(User::class, 'id', 'proprietario_id');
    }
}
