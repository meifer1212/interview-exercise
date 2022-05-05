<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'NIF'=>$this->faker->sentence(),
            'name'=>$this->faker->name(),
            'address'=>$this->faker->address(),
        ];
    }
}
