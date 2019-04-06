<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    
    return [
        'name' => $faker->word,
        'detail' => $faker->paragraph,
        'price' => $faker->numberBetween(100,1000),
        'stock' => $faker->randomDigit,
        'dicount' => $faker->numberBetween(10,30),
    ];
});
