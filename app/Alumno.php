<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = ['name', 'apellido', 'fecha_nacimiento', 'direccion', 'genero', 'telefono', 'email', 'cursos', 'password'];
}
