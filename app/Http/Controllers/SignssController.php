<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SignssController;

class SignssController extends Controller
{
    public function signnns(){
        return view ('signage.industry');
    }
    public function signsquare(){
        return view('signage.quiz');
    }
}
