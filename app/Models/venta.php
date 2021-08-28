<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    use HasFactory;
    protected $table='venta';

    public function tipoventa(){

        return $this->belongsTo(tipoventa::class,'coditv','coditv');
    }
    public function detalleventa(){

         return $this->hasMany(detalleventa::class,'codiv','codiv');
    }
    public function factura(){

        return $this->hasMany(factura::class,'codiv','codiv');
    }
}
