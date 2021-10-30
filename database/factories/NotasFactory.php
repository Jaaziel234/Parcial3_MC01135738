<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Notas;
use Faker\Generator as Faker;

$factory->define(Notas::class, function (Faker $faker) {
    return [
        'nota1' => '10',
        'nota2' => '8',
        'nota3' => '9',
        'nota4'=> '10',
        'parcial' => '2',
        'promedio' => '9',
        'alumnos' => 'Jaaziel Martinez',
        'cursos' => 'progra1',
        'profesor' => 'Carlos perez'
    ];
});
