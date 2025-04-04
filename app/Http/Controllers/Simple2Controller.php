<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Simple2Controller extends Controller
{
    public function blg1(){
        return view ("customer");
    }
    public function blog2($cokie1,$cokie2){
        return  "hello" . $cokie1 . "u" . $cokie2;
    }
}
