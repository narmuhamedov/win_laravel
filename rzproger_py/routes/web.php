<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/stranisa_o_nas', function () {
    return view('about');
})->name('about');


Route::get('/nawi_contakty', function () {
    return view('contact');
})->name('contact');


Route::post('/polushenie_dannyh', function () {
    return dd(Request::all());
//    return "This is WIN-1-21";
})->name('contact-form');
