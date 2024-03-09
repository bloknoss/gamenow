<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resenas>
 */
class ResenasFactory extends Factory
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
            "contenido_resena" => fake()->text(),
            "likes" => fake()->numberBetween(1, 10)
            //
        ];
    }
}
