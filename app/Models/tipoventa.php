<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoventa extends Model
{
    use HasFactory;

    protected $table='tipoventa';

    public function venta()
    {
        return $this->hasMany(venta::class,'coditv','coditv');
    }
}
