<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detallecompra extends Model
{
    use HasFactory;
    protected $table='detallecompra';

    public function compra(){

        return $this->belongsTo(compra::class,'codicom','codicom');
    }
    public function producto(){

        return $this->belongsTo(producto::class,'codiprod','codiprod');
    }
}
