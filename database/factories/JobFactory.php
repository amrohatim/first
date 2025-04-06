<?php

namespace Database\Factories;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id'=>employee::factory(),
            'title'=>fake()->jobTitle,
            'salary'=> fake()->randomElement(['50,000 USD' , '100,000  USD' , '20,000 USD' , '30,000 USD' , '40,000 USD' , '900,000 USD', '250,000 USD' , '10,000 USD' , '5,000 USD' ])
             ,'location'=>fake()->locale,
             'featured'=>'false',
             'url'=>fake()->url,
             'featured'=>false
        ];
    }
}
