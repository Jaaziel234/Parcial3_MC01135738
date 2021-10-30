<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Cursos;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Cursos::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'año' => $faker->date('Y-m-d H:i:s'),
        'ciclo' => '2',
        'idprofesor' => '1'
        
    ];
});
