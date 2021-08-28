<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class compra extends Model
{
    use HasFactory;
    protected $table='compra';

    public function proveedor(){

        return $this->belongsTo(proveedor::class, 'codip', 'codip');
    }
    public function personal(){

        return $this->belongsTo(personal::class, 'ci', 'ci');
    }
    public function detallecompra(){
        return $this->hasMany(detallecompra::class,'codicom','codicom');
    }
}
