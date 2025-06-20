<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        $posts = Post::get();
        return view('pages.home', compact('posts'));
    }
}
