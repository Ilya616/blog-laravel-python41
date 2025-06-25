<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [

            [
                'title' => '9 Things I Love About Shaving My Head During Quarantine',
                'short_content' => 'Sit nemore imperdiet elaboraret eu, commune inciderint mei no. Ex usu ignota eripuit oportere. Vis at choro oratio, vitae quodsi ei sit. Mei ne habeo legimus qualisque.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 1,
                'author_id' => 1,
            ],
            [
                'title' => 'Why We Need to Stop Talking About Food and Guilt',
                'short_content' => 'Quo ex aeterno luptatum mnesarchum, an duis veri harum eam, mel ex diceret dolorum. Sed no causae dissentias, quo cu ridens gubergren voluptatibus.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 2,
                'author_id' => 1,
            ],
            [
                'title' => '30 Best Lifestyle Blogs to Follow in 2021',
                'short_content' => 'Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh augue senectus.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 3,
                'author_id' => 2,
            ],
            [
                'title' => '31 Best Lifestyle Blogs to Follow in 2021',
                'short_content' => 'Tempus ultricies augue luctus et ut suscipit. Morbi arcu, ultrices purus dolor erat bibendum sapien metus. Sit mi, pharetra, morbi arcu id. Pellentesque dapibus nibh augue senectus.',
                'content' => 'text',
                'post_img' => 'default.jpg',
                'category_id' => 1,
                'author_id' => 2,
            ],

        ];
        
        foreach($posts as $post){
            DB::table('post')->insert([
                'title' => $post['title'],
                'short_content' => $post['short_content'],
                'content' => $post['content'],
                'post_img' => $post['post_img'],
                'category_id' => $post['category_id'],
                'author_id' => $post['author_id'],
            ]);
        }

        
    }
}
