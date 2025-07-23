<?php 
    namespace App\Helpers;

use App\Models\Comment;
use Illuminate\Support\Carbon;



    class Comments{
        static $viewComment = "";
        static $depth = 1;
        static function render($post_id){
            
            return self::parentComments($post_id);
        }

        static function parentComments($post_id){

            $parentComments = Comment::where('post_id', $post_id)->where('parrent_id', NULL)->get();
            return view('components.parent_comments', compact('parentComments'));
            // return "comments post";
            
        }

        static function childrenComments($parent_id, $depth = 1){

            self::$depth = $depth;
            $childrenComments = Comment::where('parrent_id', $parent_id)->get();


            foreach($childrenComments as $comment){

                $depth = self::$depth;
                self::$viewComment .= view('components.children_comments', compact('childrenComments', 'depth'));

                self::$depth++; 
                self::childrenComments($comment->id, self::$depth);
            }

            

            // return $childrenComments;
            

            // return view('components.children_comments', compact('childrenComments'));
        }
    }