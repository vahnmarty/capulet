<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Property>
 */
class PropertyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Property::class;

    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->realText(),
            'address1' => fake()->streetAddress,
            'address2' => fake()->streetAddress, // password
            'city' => fake()->city,
            'state' => fake()->stateAbbr,
            'zip' => fake()->postcode,
            'contact_name' => fake()->name(),
            'contact_phone' => fake()->phoneNumber(),
            'contact_email' => fake()->unique()->safeEmail(),
            'gate_code' => fake()->postcode,
            'door_code' => fake()->postcode,
        ];
    }
}
