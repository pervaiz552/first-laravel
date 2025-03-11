<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimpleController extends Controller
{
    public function about(){
        return "Hello from about!";
    }

    public function contact(){
        return 'hello contact controller!';
    }
}
