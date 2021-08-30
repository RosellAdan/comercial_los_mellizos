<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table='producto';
    protected $primaryKey='codiprod';

    public function tipoproducto(){

        return $this->belongsTo(tipoproducto::class, 'coditp','coditp');
    }
    public function personal(){

        return $this->belongsTo(personal::class, 'ci','ci');
    }
    public function detallecompra(){

        return $this->hasMany(detallecompra::class,'codiprod','codiprod');
    }
    public function detalleventa(){

        return $this->hasMany(detalleventa::class,'codiprod','codiprod');
    }
}
