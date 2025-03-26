<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //register
    public function register(){
            //GET+POST
            return view("auth.register");
    }
    //login
    public function login(){
            //GET+POST
           return view("auth.login");
    }
    //dashboard
    public function dashboard(){
        //AFTER LOGIN
        return view("auth.dashboard");
    }
    //profile
    public function profile(){
         //AFTER LOGIN
         return view("auth.profile");
    }
    //logot
    public function logout(){
         //AFTER LOGIN
         echo "logout";
    }
}
