<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        return view('pages.admin_index');
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
