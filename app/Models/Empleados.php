<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    // Relaciones 1 a n (inversa)
    public function companias(){
        return $this->belongsTo('App\Models\Companias');
    }

}
