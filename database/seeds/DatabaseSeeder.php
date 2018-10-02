<?php

use App\Models\Comment;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Models\Medicine;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Province;
use App\Models\Tag;
use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User role and permissions
        if (Permission::count() == 0) $this->call(PermissionTableSeeder::class);
        if (Role::count() == 0) $this->call(RoleTableSeeder::class);
        if (User::count() == 0) $this->call(UsersTableSeeder::class);
        if (Province::count() == 0) $this->call(ProvinceTableSeeder::class);

        // Categories seeder
        if (ProductCategory::count() == 0) $this->call('ProductCategorySeeder');
        if (CompanyCategory::count() == 0) $this->call('CompanyCategorySeeder');

        // Tag seeder
        if (Tag::count() == 0) $this->call('TagSeeder');

        // Company and product seeders
        if (Company::count() == 0) $this->call('CompanySeeder');
        if (Product::count() == 0) $this->call('ProductSeeder');
        if (Comment::count() == 0) $this->call('CommentSeeder');

        // Order and payment seeders
        if (Order::count() == 0) $this->call('OrderSeeder');
        if (Payment::count() == 0) $this->call('PaymentSeeder');


    }
}


class ProductCategorySeeder extends Seeder
{

    public function run()
    {
        factory(ProductCategory::class, 30)->create();
    }
}


class CompanyCategorySeeder extends Seeder
{

    public function run()
    {
        factory(CompanyCategory::class, 30)->create();
    }
}

class TagSeeder extends Seeder
{

    public function run()
    {
        factory(Tag::class, 10)->create();
    }
}

class ProductSeeder extends Seeder
{

    public function run()
    {
        factory(Product::class, 10)->create();
    }
}

class CompanySeeder extends Seeder
{

    public function run()
    {
        factory(Company::class, 100)->create();
    }
}

class CommentSeeder extends Seeder
{

    public function run()
    {
        factory(Comment::class, 200)->create();
    }
}

class OrderSeeder extends Seeder
{

    public function run()
    {
        factory(Order::class, 10)->create();
    }
}

class PaymentSeeder extends Seeder
{
    public function run()
    {
        factory(Payment::class, 20)->create();
    }
}