<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    public function orden_detalle(){
        return $this->hasMany(OrdenDetalle::class, 'ordens_id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
