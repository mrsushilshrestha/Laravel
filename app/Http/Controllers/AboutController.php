<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class AboutController extends Controller
{
    //
    function about($name){

        return view("tryView",['user'=>$name]);
    }

    function login(){
        if (View::exists('tryView')) {
            return view('tryView');
        } else {
            echo 404,"This view does not exist.";
        }
        
        // return view('tryView');
    }
}
