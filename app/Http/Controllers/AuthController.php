<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthController extends Controller
{
    public function showHome(){
        if(Auth::check()){
            return view('home');
        }

        return redirect('/login');
    }

    public function showLoginForm(){
        return view('auth.login');
    }

    public function showRegisterForm(){
        return view('auth.register');
    }

    public function register(Request $request){
       User::create([
           'name'=>$request->name,
           'email'=>$request->email,
           'password'=>bcrypt($request->password),
           'role_id'=>2
       ]);

        return redirect('/login');
    }

    public function login(Request $request){
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
        ])){
            return redirect('/home');
        }

        return redirect('/login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
        
    }

    public function delete(Request $request){
        //disini pakai gate untuk check apakah delete boleh dilakukan atau tidak
        $post = Post::findOrFail($request->id);

        //dd($post);

        if(Gate::check('admin_delete')){
            dd("Admin boleh delete semuanya");
        }else if(Gate::check('member_delete',$post)){
            dd("Saya bisa delete postingan saya");
        }

        dd("Tidak bisa delete postingan orang");
    }

    public function getPost(){
        //disini buat pagination untuk data yang mau ditampilkan
        $post = Post::paginate(5);

        return view('post',['posts'=>$post]);
    }

}
