<?php

namespace Database\Factories;

use App\Models\Contacts;
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
            'email' = $this->faker->unique()->safeEmail,

        ];
    }
}
