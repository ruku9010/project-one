<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dashboard(){
        // return "Dashboard Page";
        $name = "John Doe";
        $email = "rukunujjamans@gmail.com";
        // return view('dashboard.home',['name' => $name, 'email' => $email]); 
        //or
        return view('dashboard.home', compact('name', 'email'));
    }
}
