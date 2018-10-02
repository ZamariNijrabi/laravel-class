<?php

use App\Models\Company;
use App\Models\Product;
use App\Models\ProductCategory;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'                => $faker->name,
        'serial_number'       => $faker->numberBetween(1, 999999),
        'price'               => $faker->numberBetween(10, 400),
        'is_used'             => $faker->boolean,
        'owner_company_name'  => $faker->name,
        'company_id'          => Company::all()->random()->id,
        'product_category_id' => ProductCategory::all()->random()->id
    ];
});
