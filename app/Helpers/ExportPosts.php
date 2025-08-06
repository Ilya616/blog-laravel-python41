<?php 
    namespace App\Helpers;

    use App\Models\Comment;
    use App\Models\Post;

    class ExportPosts{
       
        static function data(){
            $posts = Post::select('id', 'title', 'views')->get();

            $titles = self::getPostsTitle($posts);
            $views = self::getPostsView($posts);
            
            return [
                'postsTitle' => $titles,
                'postsView' => $views,
            ];
        }

        static function getPostsTitle($posts){
            $data = [];
            foreach($posts as $post){
                $data[] = substr($post->title, 0, 7)."...";
            }
            return $data;
        }

        static function getPostsView($posts){
            $data = [];
            foreach($posts as $post){
                $data[] = $post->views;
            }
            return $data;
        }

        
    }