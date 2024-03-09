<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Juegos>
 */
class JuegosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            "nombre_juego" => fake()->name(),
            "editorial_id" => \App\Models\Editoriales::all()->random()->id,
            "fecha_lanzamiento" => fake()->date(),
            "ventas" => fake()->numberBetween(1, 100000),
            "descripcion" => fake()->text(),
        ];
    }
}
