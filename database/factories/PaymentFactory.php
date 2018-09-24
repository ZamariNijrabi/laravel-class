<?php

use App\Order;
use App\Payment;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->random()->id,
        'date'     => $faker->date('Y-m-d'),
        'amount'   => $faker->numberBetween(0, 2000)
    ];
});
