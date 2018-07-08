<?php

use Faker\Generator as Faker;

$factory->define(App\Hero::class, function (Faker $faker) {
    return [
        'nick_name' => $faker->name,
        'real_name' => $faker->name,
        'prehistory' => $faker->paragraph,
        'superpowers' => $faker->text,
        'catch_phrase' => $faker->sentence
    ];
});