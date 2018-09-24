<?php

use App\CompanyCategory;
use Faker\Generator as Faker;

$factory->define(CompanyCategory::class, function (Faker $faker) {
    return [
        'name'        => $faker->name,
        'description' => $faker->sentence(4),
    ];
});
