<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';

    public function personal(){

        return $this->belongsTo(personal::class ,'ci', 'ci');
    }
}
