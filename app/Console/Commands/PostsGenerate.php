<?php

namespace App\Console\Commands;

use App\Models\Post;
use Faker\Factory;
use Illuminate\Console\Command;

class PostsGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'posts-generate {count_posts : Write count posts generate}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count_posts = $this->argument('count_posts');

        $faker = Factory::create();

        for($i = 0; $i < $count_posts; $i++){
            $model = new Post;

            $model->title = $faker->words(5, true);
            $model->short_content = $faker->paragraph(1);
            $model->content	= $faker->text(1000);
            $model->post_img = $faker->regexify('[A-Z]{5}[0-4]{3}').".png";

            $model->save(); 
        }

        $this->info('Посты успешно сгенерированы в количестве '.$count_posts.' штук');
        
        // создать еще одну консольную команду которая чистит из таблицы post заданое число постов всконца
    }
}
