<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function register(){
        return view('register');
    }
    function login(){
        return view('login');
    }
    function userDetail($id){
        return 'User dengan ID ' . $id;
    }

    function registerForm(){
        return view('registerForm');
    }
}
