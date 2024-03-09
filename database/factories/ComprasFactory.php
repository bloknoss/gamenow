<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Compras>
 */
class ComprasFactory extends Factory
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
            'juego_id' => \App\Models\Juegos::all()->random()->id,
            'fecha_compra' => now(),
            //
        ];
    }
}
