<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Calendar::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(4),
        'subtitulo' => $faker->sentence(4),
        'descripcion' => $faker->sentence(4),
        'horarios' => $faker->sentence(4),
        'lugar' => $faker->sentence(4),
        'inversion' => $faker->sentence(4),
        'imagen' => $faker->imageUrl($width = 640, $height = 480),
        'start' => $faker->dateTimeThisMonth(),
        'end'	=> $faker->dateTimeThisMonth(),
        'color'	=> $faker->hexColor()
    ];
});

$factory->define(App\Capacitacion::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'title' => $faker->sentence(4),
        'descripcion' => $faker->sentence(4),
        'horarios' => $faker->sentence(4),
        'horarios' => $faker->sentence(4),
        'lugar' => $faker->sentence(4),
        'inversion' => $faker->sentence(4),
        'pdf' => $faker->imageUrl($width = 640, $height = 480),
        'start' => $faker->dateTimeThisMonth(),
        'end'   => $faker->dateTimeThisMonth(),
        'color' => $faker->hexColor()
    ];
});
