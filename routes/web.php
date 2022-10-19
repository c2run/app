<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function(){
   
    return view('home');
})->name('home');
*/
Route::view('/', 'home')->name('home');
Route::view('/acerca', 'about')->name('about');
Route::view('/portafolio', 'portfolio')->name('portfolio');
Route::view('/contacto', 'contact')->name('contacto');
