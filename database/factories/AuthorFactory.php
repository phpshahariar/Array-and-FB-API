<?php

use App\Author;
use Faker\Generator as Faker;

$factory->define(Author::class, function (Faker $faker) {
    return [
        'name'      => $faker->name,
        'email'     => $faker->unique()->safeEmail,
        'mobile'    => $faker->phoneNumber,
        'address'   => $faker->address
    ];
});
