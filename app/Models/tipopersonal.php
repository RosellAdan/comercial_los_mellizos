<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipopersonal extends Model
{
    use HasFactory;

    protected $table = 'tipopersonal';

    public function personal(){

        return $this->hasMany(personal::class,'idp','idp');
    }
}
