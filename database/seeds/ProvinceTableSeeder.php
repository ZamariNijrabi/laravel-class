<?php

use App\Models\Province;
use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Province::create(['name' => 'Kabul']);
        Province::create(['name' => 'Herat']);
        Province::create(['name' => 'Balkh']);
        Province::create(['name' => 'Khost']);
        Province::create(['name' => 'Ghor']);
        Province::create(['name' => 'Ghazni']);
    }
}
