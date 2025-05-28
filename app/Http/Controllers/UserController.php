<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser(){
        // return "Mr. Samy";
        return view('user');
    }

    function aboutuser(){
        return "Hello this is just the about function in use controller";
    }

    function getUserName($name){
        // return "hello this is : " . $name;
        return view('getuser', ['name' => $name]);
    }

    function adminLogin(){
        // bY THIS WE CAN CHECK THAT THIS VIEW 
        if(View::exists('admin.login')){
            return view('admin.login');
        }else{
            echo "No View Found";

        }
    }

    function userHome(){ 
        $name = "samy";
        $users = ['Ram', 'Shayam', 'Aman', 'ravi', 'Sam'];
        return view('home', ["name" => $name, "users" => $users]);
    }

    function userAbout($name = NUll){
        return view('abouttest', ['user' => $name]);
    }
}
