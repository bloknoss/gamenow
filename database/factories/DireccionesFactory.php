<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Direcciones>
 */
class DireccionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usuario_id' => \App\Models\User::all()->random()->id,
            'pais' => fake()->name(),
            'provincia' => fake()->name(),
            'calle' => fake()->name(),
            'codigo_postal' => fake()->numberBetween(1, 20000),
            'ciudad' => fake()->name(),
            //
        ];
    }
}
