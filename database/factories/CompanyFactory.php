<?php
use App\User;
use App\Models\Province;
use App\Models\CompanyCategory;
use App\Models\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    $networks = ['078', '074', '070', '072', '079', '077', '076'];
    
    return [
        'name'                => $faker->name,
        'address'             => $faker->address,
        'established_date'    => $faker->date('Y-m-d'),
        'license_number'      => $faker->randomNumber(6),
        'phone '              => $networks[$faker->numberBetween(0,6)],
        'email'               => $faker->safeEmail,
        'user_id'             => User::all()->random()->id,
        'province_id'         => Province::all()->random()->id,
        'company_category_id' => CompanyCategory::all()->random()->id
    ];
});
