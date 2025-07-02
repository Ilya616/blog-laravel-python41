<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['id' => 1, "name" => "user"],
            ['id' => 2, "name" => "author"],
            ['id' => 3, "name" => "admin"],
            ['id' => 4, "name" => "guest"],
        ];
        foreach($roles as $role){
            DB::table('role')->insert([
                'id' => $role['id'],
                'name' => $role['name'],
            ]);
        }
    }
}
