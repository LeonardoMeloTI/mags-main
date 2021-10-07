<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Contrato extends Model
{
    use HasFactory;
    
    public function contrato()
    {
        return $this->hasOne(Posto::class, 'contrato_id', 'id');
    }
}
