<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Sale;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class ItemSoldFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sale_id' => Sale::all()->random()->id,
            'product_id' => Product::all()->random()->id,
            'supplier_id' => Supplier::all()->random()->id,
            'quantity' => $this->faker->numberBetween(1,25),
        ];
    }
}
