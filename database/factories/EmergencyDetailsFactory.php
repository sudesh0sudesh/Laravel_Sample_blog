<?php

namespace Database\Factories;
use App\Models\Hostel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmergencyDetails>
 */
class EmergencyDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "bloodgroup"=>fake()->randomElement(["O positive","A Positive","B Positive","O negative","A negative","B negative"]),
            "emergencycontact"=>fake()->numberBetween(7777777777,9999999999),
            "hostel_id"=>fake()->unique()->numberBetween(2,Hostel::all()->count())


            //
        ];
    }
}
