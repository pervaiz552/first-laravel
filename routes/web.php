<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignssController;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\RoutingController;
use App\Http\Controllers\Simple1Controller;
use App\Http\Controllers\RoutingsController;


Route::get('/', function () {
    return view('home');
});
Route::get('/blogs', [AdminController::class,"blogs"]);
Route::get('/dashboard', [AdminController::class,"contact"]);
Route::get('/admin', [AdminController::class, "about"]);
Route::get('/admin-1', [AdminController::class, "service"]);
Route::get('/sign1', [Simple1Controller::class,"sign1"]);
Route::get('/blog1', [Simple1Controller::class, 'blog1']);
Route::get('/indoor_1',[Simple1Controller::class, 'indoor_1']);
Route::get('/dash', [SignssController::class,"signnns"]);
Route::get('/dash_1', [SignssController::class,"signsquare"]);


Route::get("/blog/{name}", [RoutingController::class, 'simple']);
Route::get("/message/{name}/{message}", [RoutingController::class, 'message']);
Route::get("/letter/{name}/{message?}", [RoutingController::class, 'letter'])->name('leters');
Route::get("/contact/{firstname}", [RoutingsController::class, 'simples'])->name('f.name');
Route::get("messe/{name1}/{message}",[RoutingsController::class,'messages'])->name('messe.age');
Route::get('applier/{request1}/{request2}/{request3}',[RoutingsController::class,"requests"])
    ->name('applier.req');
Route::get('/aply/{apply1}/{apply2}',[RoutingsController::class,'aplier'])->name("loss");    
    Route::get('/los',function(){
        return redirect()->route('loss',[
            'mate',
            'hi'
        ]);
    });
    Route::get('/let',function(){
        return redirect('leters');
    });
    Route::get('/fm/submit',function(){
        return"Pervaiz";
    })->name('fm');
    Route::get('/goo',function(){
        // return redirect('fm/submit');
        // return redirect('fm');
        return redirect()->route('f.name', [
          
            'Mate',
        ]);
    });




    
Route::get('/form/submit', function(){
    return "ahmer";
})->name('form');

Route::get('/go', function(){
    // return redirect('/form/submit');
    // return redirect()->route('form');
    return redirect()->route('applier.req', [
        'Hi',
        'There',
        'Mate',
    ]);
});

Route::get('/frm/submit',function(){
    return "hello how are u";
})->name('frm');
Route::get('/goto',function(){
    // return redirect('frm/submit');
    // return redirect()->route('frm');
    return redirect()->route('messe.age',[
        'hi',
        'how are u',
    ]);

});



Route::get('/get-fruit/{fruit}', function($fruit){
    return view('fruits', [
        'myfruit' => $fruit
    ]);
});
Route::get('/get-fruit/{fruit}', function($fruit){
    return view('fruits', [
        'myfruit' => $fruit
    ]);
});

Route::get('/get_animal/{fruit}', function($animal){
    return view('animal', [
        'myanimal' => $animal
    ]);
});
Route::get('/custo_mer/{customer}',function($customer){
    return view('customer',[
        'mycustomer'=>$customer
    ]);
});




Route::get('/about', [SimpleController::class, 'about']);
Route::get('/contact', [SimpleController::class, 'contact']);

Route::get('/services',function(){
    return ' hello services';
});

Route::get('/about/services/sdjhags',function(){
    return ' hello about services';
});
