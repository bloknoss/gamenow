<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\Editoriales::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\Direcciones::factory(10)->create();
        \App\Models\AmigosUsers::factory(10)->create();
        \App\Models\Juegos::factory(10)->create();
        \App\Models\Imagenes::factory(10)->create();
        \App\Models\Resenas::factory(10)->create();
        \App\Models\Tickets::factory(10)->create();
        \App\Models\Compras::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
