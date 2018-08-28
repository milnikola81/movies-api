<?php

use Faker\Generator as Faker;

$factory->define(App\Movie::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->sentence(),
        'director' => $faker->name(),
        'imageUrl' => $faker->imageUrl($width = 640, $height = 480),
        'duration' => $faker->numberBetween($min = 80, $max = 180),
        'releaseDate' => $faker->year(),
        'genre' => $faker->word()
    ];
});