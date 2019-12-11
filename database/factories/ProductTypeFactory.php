<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\ProductType::class, function (Faker $faker) {
    return [
        'product_id' => App\Product::all()->random()->id,
        'type_id' => App\Type::all()->random()->id,
    ];
});
