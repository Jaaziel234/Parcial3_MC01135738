<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notas extends Model
{
    protected $table = 'notas';

    protected $fillable = ['nota1', 'nota2', 'nota3', 'nota4', 'parcial', 'promedio','idalumno', 'idcursos', 'idprofesor'];
}
