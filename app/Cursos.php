<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    protected $table = 'cursos';
    
    protected $fillable = ['name', 'año', 'ciclo', 'idprofesor'];
}
