<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tickets>
 */
class TicketsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "juego_id" => \App\Models\Juegos::all()->random()->id,
            "usuario_id" => \App\Models\User::all()->random()->id,
            "descripcion" => fake()->text(),
            "solucionado" => fake()->numberBetween(0, 1),
            //
        ];
    }
}
