<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Profesor;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'apellido' => $faker->word,
        'dui' => Str::random(10),
        'telefono' => Str::random(10),
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
    ];
});
