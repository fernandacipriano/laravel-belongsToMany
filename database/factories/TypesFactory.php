<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Type::class, function (Faker $faker) {
    return [
        'descricao' => 'Type ' . $faker->word
    ];
});
