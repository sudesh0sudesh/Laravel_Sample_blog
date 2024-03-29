<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hostel>
 */
class HostelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'contactNumber'=>fake()->numberBetween(7777777777,9999999999),
            'unique_Id'=>fake()->numerify('###-####-#####'),
            'student'=>fake()->boolean()         //
        ];
    }
}
