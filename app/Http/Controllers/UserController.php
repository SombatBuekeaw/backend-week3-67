<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function UserHome(){
        return view('home');
    }
    
    function UserAbout($name){
        //return view('about'['name' => $name);
        View: if(view()->exists('admin.login'))
        {
            return view('admin.login');
        }else{
            return "view not found";
        }
    }
    
    function adminLogin(){
        return view('admin.login');
    }
}
