<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function(){
   
    return view('home');
})->name('home');
*/
$portafolio = [
    ['title' => 'Proyecto #1'],
    ['title' => 'Proyecto #2'],
    ['title' => 'Proyecto #3'],
    ['title' => 'Proyecto #4'],
];

Route::view('/', 'home')->name('home');
Route::view('/acerca', 'about')->name('about');
Route::view('/portafolio', 'portfolio', compact('portafolio'))->name('portfolio');
Route::view('/contacto', 'contact')->name('contacto');
