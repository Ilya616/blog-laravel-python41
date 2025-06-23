<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $posts = Post::get();
        return view('pages.home', compact('posts'));
    }

    public function category($id = null){


        if($id){
            $posts = Category::where('id', $id)->first()->posts;
        }
        else{
            $posts = Post::get();
        }
        

        


        return view('pages.category', compact('posts'));
    }
}
