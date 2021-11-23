<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $filalble = [
        'cliente_id',
        'fecha_venta',
        'total',
        'estado',
    ];

    public function cliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function ventaDetalles(){
        return $this->hasMany(ventaDetalles::class);
    }
}
