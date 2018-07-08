<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'hero_id' => function () {
            return factory(App\Hero::class)->create()->id;
        },
        'path' => $faker->imageUrl
    ];
});