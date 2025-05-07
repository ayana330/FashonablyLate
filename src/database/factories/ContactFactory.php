<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Contact::class;
    
     public function definition()
    {
        return [
            'first_name' = $this->faker->first_name,
            'last_name' = $this->faker->last_name,
            'email' = $this->faker->unique()->safeEmail,

        ];
    }
}
