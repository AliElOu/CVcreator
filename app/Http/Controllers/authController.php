<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class authController extends Controller
{
    public function login(Request $request) {
        $email = $request->email;
        $password = $request->password; 
        $credential = ['email' => $email,'password'=> $password];

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return to_route("home")->with("success","vous etes bien connecté $email");
            } else {
            return back()->withErrors([
                'login' => '*Email ou mot de passe incorrect',
            ])->onlyInput("email");
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return redirect()->route("login.show");
    }
    public function register(Request $request) {
        $username = $request->username;
        $email = $request->email;
        $password = $request->password; 
        $credential = ['username' => $username, 'email' => $email,'password'=> hash::make($password)];
        $request->validate([
            'username' => "required|unique:users",
            'email' => "required|email|unique:users",
            'password' => "required|min:3|confirmed",
            'password_confirmation' => "required",

        ]);
        user::create($credential);
        return redirect()->route("login.show")->with("register_success","Vous etes inscrits avec succes !");
    }
    
    public function login_show() { 
        return view("login");   
    }
    public function register_show() { 
        return view("register");   
    }

    
}