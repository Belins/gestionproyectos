<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EmpleadoProyecto;
use Faker\Generator as Faker;

$factory->define(EmpleadoProyecto::class, function (Faker $faker) {
    return [
        'proyecto_id' => $faker->numberBetween($min = 1, $max = 10),
        'empleado_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
