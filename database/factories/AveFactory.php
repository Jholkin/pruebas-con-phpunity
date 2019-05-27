<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Ave;
use Faker\Generator as Faker;

$factory->define(Ave::class, function (Faker $faker) {
    $number = rand(1,10);
    return [
        'ave' => $faker->name,
        'cantidad' => $faker->name,
        'lugar_referencia' => $faker->city,
        'responsable' => $faker->name
    ];
});
