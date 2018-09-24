<?php

use App\Comment;
use App\Product;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id'    => User::all()->random()->id,
        'product_id' => Product::all()->random()->id,
        'comment'    => $faker->sentence(20)
    ];
});
