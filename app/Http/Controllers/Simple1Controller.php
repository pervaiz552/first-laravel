<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple1Controller extends Controller
{
    public function sign1(){
        return view('signage.outdoor'); 
    }
    public function blog1(){
        return view('signage.blog');
    }
    public function indoor_1(){
        return view ('signage.indoor');
    }
}
