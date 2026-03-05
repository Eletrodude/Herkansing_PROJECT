<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {

    $contactEmail = 'Michaelangelo123@gmail.com';

    return view('contact',compact($contactEmail));
});