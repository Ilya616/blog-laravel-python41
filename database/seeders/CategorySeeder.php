<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'title' => 'Fashion',
                'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Asperiores non dolor officiis eaque corporis.'
            ],
            [
                'id' => 2,
                'title' => 'Travel',
                'content' => null,
            ],
            [
                'id' => 3,
                'title' => 'Health',
                'content' => null,
            ],
            [
                'id' => 4,
                'title' => 'Kitchen',
                'content' => null,
            ],
        ]; 


        foreach($categories as $category){
            DB::table('category')->insert([
                'id' => $category['id'],
                'title' => $category['title'],
                'content' => $category['content'],
            ]);
        }
    }
}
