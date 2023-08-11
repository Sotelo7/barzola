<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    public function zonas()
    {
        return $this->belongsTo(Nivel::class, 'zona_id', 'id');
    }
}
