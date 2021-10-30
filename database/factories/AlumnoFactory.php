<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Alumno;

$factory->define(Alumno::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'apellido' => 'aleatorio',
        'fecha_nacimiento' => '26/07/1998',
        'direccion'=> 'san salvador',
        'genero' => 'M',
        'telefono' => '68974578',
        'email' => $faker->unique()->safeEmail,
        'cursos' => 'etica profosional',
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    ];
});
