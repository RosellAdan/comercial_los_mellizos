<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoproducto extends Model
{
    use HasFactory;

    protected $table ='tipoproducto';
    protected $primaryKey='coditp';

    public function producto(){

        return $this->hasMany(producto::class, 'coditp', 'coditp');

    }
}
