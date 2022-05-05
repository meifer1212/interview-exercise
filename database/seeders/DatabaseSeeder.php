<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\ItemSold;
use App\Models\Product;
use App\Models\Sale;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create();
        Supplier::factory(50)->create();
        Customer::factory(5)->create();
        Product::factory(15)->create();
        Sale::factory(5)->create();
        ItemSold::factory(50)->create();
    }
}
