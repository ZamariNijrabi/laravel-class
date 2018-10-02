<?php

use App\Models\Order;
use App\User;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'date'        => $faker->date('Y-m-d'),
        'user_id'     => User::all()->random()->id,
        'description' => $faker->sentence(10)
    ];
});
