<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Validators\CommentValidator;
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

    public function post($category_id, $post_id){

        $post = Post::where('id',  $post_id)->first();

        if(!$post){
            return redirect('/404');
        }

        return view('pages.post', compact('post'));
    } 

    public function commentRequestForm(Request $request){
        

        $validator = CommentValidator::validator($request);

        if($validator->fails()){
            return redirect()->back()->withFragment('commentForm');
            // return redirect("/test/auth")->withErrors($validator)->withInput();
        }
        return '123';
    }
}
