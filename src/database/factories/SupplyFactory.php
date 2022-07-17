<?php

namespace Database\Factories;

use App\Models\Martian;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $data = ['Oxgen' => 6, 'Water' => 4, 'Food' => 3, 'Medication' => 2, 'Clothing' => 1];

        $martian = Martian::factory()->create();

        $name = $this->faker->randomElement(array_keys($data));

        return [
            'name' => $name,
            'description' => $this->faker->sentence(),
            'quantity' => rand(0, 100),
            'points' => $data[$name],
            'status' => rand(0, 1),
            'martian_id' => $martian->id
        ];
    }
}