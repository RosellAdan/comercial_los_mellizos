<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detalleventa extends Model
{
    use HasFactory;
    protected $table='detalleventa';

    public function producto(){

        return $this->belongsTo(producto::class,'codiprod','codiprod');
    }
    public function venta(){

        return $this->belongsTo(venta::class,'codiv','codiv');
    }
}
