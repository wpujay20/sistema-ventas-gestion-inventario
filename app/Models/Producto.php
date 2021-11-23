<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Categoria;
use App\Models\Proveedor;


class Producto extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

}
