<?php

namespace App\Http\Controllers;

use App\Helpers\ExportPosts;
use App\Jobs\ProcessUpdateUserDate;
use App\Jobs\ProcessViewPosts;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index(){
        $posts = ExportPosts::data();

        // ProcessViewPosts::dispatch();
        
        $postsTitle = json_encode($posts['postsTitle']);
        $postsView = json_encode($posts['postsView']);

        
        return view('pages.admin_index', compact('postsTitle', 'postsView'));
    }

    public function profileLoad(Request $request){

        $path = Storage::disk('public')->put('avatars', $request->file('avatar'));
        
        User::where('id', Auth::id())->update(['avatar' => $path]);
        
        return redirect()->route('profile');
    }

    public function deleteAvatar(Request $request){

        if(Auth::user()->avatar != 'avatars/user.svg'){
            // Storage::delete(Storage::url(Auth::user()->avatar));

            Storage::disk('public')->delete(Auth::user()->avatar);
            User::where('id', Auth::id())->update(['avatar' => 'avatars/user.svg']);
        }
        
       
        return redirect()->route('profile');
    }

    public function profile(){
        $user = Auth::user();
        $path = Storage::url($user->avatar);
        return view('pages.admin_profile', compact('path'));
    }

    public function auth(){
        return view('pages.admin_auth');
    }

    public function authRequest(Request $request){
        

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

 
        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            ProcessUpdateUserDate::dispatch($user);
            
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function registration(Request $request){
        $msg = $request->session()->get('error');
        return view('pages.admin_registration', compact('msg'));
    }

    public function registrationReqest(Request $request){
        
        if($request->repeat_password != $request->password){
            $request->session()->flash('error', 'Пароли должны совпадать!');
            return redirect('/admin/registration');
        }

        $user = User::where('email', $request->email)->first();

        if($user){
            $request->session()->flash('error', 'Такой пользователь уже есть!');
            return redirect('/admin/registration');
        }
        $model = new User;
        $model->email = $request->email;
        $model->name = $request->name;
        $model->password = Hash::make($request->password);
        $model->save();
        return redirect()->route('login');
    }
}
