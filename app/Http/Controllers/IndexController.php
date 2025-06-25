<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IndexController extends Controller
{
    public function home(){
        $posts = Post::get();
        return view('pages.home', compact('posts'));
    }

    public function category($id = null){

        // $user = User::where("id", 2)->first();
        // dd($user->posts);

        // $role = Role::where("id", 1)->first();
        // dd($role->users);




        if($id){
            $posts = Category::where('id', $id)->first()->posts;
        }
        else{
            $posts = Post::get();
        }
        

        


        return view('pages.category', compact('posts'));
    }
}
