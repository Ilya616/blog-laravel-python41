<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Category;
use App\Models\Comment;
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

        $model = Post::find($post->id);
        $model->views++;
        $model->save();

        $comments = Comment::where('post_id', $post->id)->get();


        // сделать ссылку на сайт не обязательной, вывести её ниже текста комментария, 
        // чтобы она открывалась в новой вкладке при нажатии
        return view('pages.post', compact('post', 'comments'));
    } 

    public function commentRequestForm(Request $request){
        

        $validator = CommentValidator::validator($request);

        if($validator->fails()){
            return redirect()->back()->withFragment('commentForm');
            // return redirect("/test/auth")->withErrors($validator)->withInput();
        }

        $user = User::where(['name' => $request->name, 'email' => $request->email])->first();

        if($user == null){
            $model = new User;
            $model->name = $request->name;
            $model->email = $request->email;
            $model->password = null;
            $model->role_id = 4;
            $model->save();

            $user = $model;
        }

        $model = new Comment;
        $model->author_id = $user->id;
        $model->content = $request->comment;
        $model->parrent_id = null;
        $model->post_id = $request->post_id;
        $model->link = $request->website;
        $model->save();


        return redirect()->back()->withFragment('#comment_'.$model->id);

    }
}
