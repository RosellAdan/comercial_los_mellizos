<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;

   protected $table= 'personal';
    protected $primaryKey='ci';
    public function tipopersonal(){

        return $this->belongsTo(tipopersonal::class ,'idp', 'idp');

    }
    public function usuario(){

        return $this->hasMany(usuario::class, 'ci', 'ci');
    }
    public function compra(){

        return $this->hasMany(compra::class, 'ci', 'ci');
    }
    public function producto(){

        return $this->hasMany(producto::class, 'ci', 'ci');
    }
}
