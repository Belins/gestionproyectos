<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Proyecto;
use Faker\Generator as Faker;

$factory->define(Proyecto::class, function (Faker $faker) {
    return [
        'nombre' => $faker->domainWord,
        'titulo' => $faker->catchPhrase,
        'fechainicio' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        'fechafin' => $faker->dateTimeThisMonth($max = 'now', $timezone = null),
        'horasestimadas' => $faker->numberBetween($min = 0, $max = 50),
        'empleado_id' =>$faker->numberBetween($min = 1, $max = 10)
    ];
});
