<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AmigosUsers>
 */
class AmigosUsersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "usuario_id" => \App\Models\User::all()->random()->id,
            "amigo_id" => \App\Models\User::all()->random()->id,
            //
        ];
    }
}
