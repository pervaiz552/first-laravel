<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function simple($name){
        return 'Hi! '.$name;
    }

    public function message($name, $message){
        return 'Hi! '.$name. ' My Message: '. $message;
    }

    public function letter($name, $message = "My friend"){
        return 'Hi! '.$name. ' My Message: '. $message;
    }

    public function get_fruit(){
        return view('fruits', [
                    'myfruit' => $fruit
                ]);
    }
    public function get_animal(){
        return view ('animal',[
            'myanimal'=>$animal
        ]);
    }
}
