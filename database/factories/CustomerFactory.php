<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'dni' => $this->faker->numberBetween(109729938,1097299385),
            'adress' => $this->faker->address(),
            'birth_date' => $this->faker->date(),
        ];
    }
}
