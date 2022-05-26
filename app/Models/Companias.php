<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companias extends Model
{
    use HasFactory;


    // Relaciones 1 a n
    public function empleados(){
        return $this->hasMany('App\Models\Empleados');
    }
}
