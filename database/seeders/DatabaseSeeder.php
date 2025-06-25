<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RolesSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Миша',
            'email' => 'miha@mail.ru',
            'role_id' => '2'
        ]);

        User::factory()->create([
            'name' => 'Костя',
            'email' => 'Kostia@mail.ru',
            'role_id' => '2'
        ]);
    }
}
