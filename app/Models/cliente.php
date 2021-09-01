<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    use HasFactory;
    protected $table='cliente';
    protected $primaryKey='cic';

    public function venta(){

        return $this->hasMany(venta::class,'cic','cic');
    }
}
