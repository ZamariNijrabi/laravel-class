<?php
use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
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
