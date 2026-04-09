<?php

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {

    $contactEmail = 'Michaelangelo123@gmail.com';

    return view('contact', compact('contactEmail'));
});


Route::get('/index', function () {
    $Spelletjes = Game::all();

    return view('index', compact('Spelletjes'));
});

Route::post('/index', function (Request $request, $GameFormController) {
    $GameFormController->store(request());


    return redirect('/index');
});
Route::get('/create',function(){
    return view('create');
});


$GameFormController = App\Http\Controllers\GameFormController::class;


