<?php

use App\Http\Controllers\MensajesController;
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function(){
   
    return view('home');
})->name('home');
*/


Route::view('/', 'home')->name('home');
Route::view('/acerca', 'about')->name('about');

Route::get('/portafolio', [PortafolioController::class, 'index'])->name('portafolio');
Route::get('/portafolio/{id}', [PortafolioController::class, 'show'])->name('portafolio/show');


Route::view('/contacto', 'contact')->name('contacto');

Route::post('contacto', [MensajesController::class, 'store']);

//Route::resource('proyectos', PortafolioController::class);

//Route::resource('proyectos', PortafolioController::class)->only(['index','show']);

//Route::apiResource('proyectos', PortafolioController::class);