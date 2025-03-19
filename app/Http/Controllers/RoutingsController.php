<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingsController extends Controller
{

  public function simples($firstname){
    return 'Hi! '.$firstname;
}
  public function custo_mer(){
    return view('customer',[
        'mycustomer' =>$customer
    ]);
  }

  public function messages($name1,$message){
    return 'Hi'. $name1. "My message is:". $message;
  }
  public function requests($request1,$request2,$request3){
    return 'Hi'.$request1 . "Where are u:" . $request2 . "How old are u". $request3;
  }
  public function aplier($apply1,$apply2){
    return 'hello ' . $apply1 . "who is there" . $apply2;
  }
}
