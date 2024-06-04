<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    function sayHello(){
        return "Hello World!";
    }

    function courseName(){
        return "Laravel 11";
    }
}
