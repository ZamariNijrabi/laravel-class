<?php
use App\Models\CompanyCategory;

use Faker\Generator as Faker;

$factory->define(CompanyCategory::class, function (Faker $faker) {
    return [
    	'name'   => $faker->name;

        //
    ];
});
