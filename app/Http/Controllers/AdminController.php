<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function service() {
        return view('admin.service');
    }
    public function about() {
        return view('admin.about');
    }
    public function dashboard(){
       return view('dashboard.contact');
    }
    public function blogs(){
        return view('blogs');
    }
    public function services(){
        return ' hello services';
    }
}
