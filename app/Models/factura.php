<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factura extends Model
{
    use HasFactory;
    protected $table='factura';

    public function venta(){

        return $this->belongsTo(venta::class,'codiv','codiv');
    }
    public function cliente(){

        return $this->belongsTo(cliente::class,'cic','cic');
    }
}
