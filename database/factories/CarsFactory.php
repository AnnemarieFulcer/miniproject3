<?php

use Faker\Generator as Faker;

$factory->define(App\car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement($array=array('ford', 'honda', 'toyota')),
        'model' => $faker->randomElement($array=array('blazer', 'missile', 'jetstream')),
        'year' => $faker->year($max='now'),
    ];

});
