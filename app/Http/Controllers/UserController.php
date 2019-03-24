<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Restaurant;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	public function Register(Request $req){
		$table = new User();
		$table->name = $req->name;
		$table->gender = $req->gender;
		$table->date_of_birth = $req->dob;
		$table->email = $req->email;
		$table->password = bcrypt($req->password);
		$table->phone = $req->phone;
		$table->address = $req->address;
		$table->save();

		return redirect('/Login');
	}

	public function Login(Request $req){
        if(Auth::attempt([
            'email'=>$req->email,
            'password'=>$req->password
        ])){
            return redirect('/');
        }

        return redirect('/Login');
	}

    public function Logout(){
        Auth::logout();
        return redirect('/Login');
    }
}
