<?php

namespace Database\Factories;
use App\Models\EmergencyDetails;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Relatives>
 */
class RelativesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "name"=>fake()->name(),
            "relative_contact"=>fake()->numberBetween(7777777777,9999999999),
            "emergency_details_id"=>fake()->numberBetween(2,EmergencyDetails::all()->count()),
        ];
    }
}
