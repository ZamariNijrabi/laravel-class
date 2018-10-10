<?php

use App\Models\Tag;
use Faker\Generator as Faker;

$factory->define(Tag::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->sentence(6)
    ];
});