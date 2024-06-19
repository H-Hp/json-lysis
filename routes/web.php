<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/favicons/favicon.ico', function () { 
    return response()->file(public_path('favicons/favicon.ico')); 
});

Route::get('/robots.txt', function () {
    return response()->file(public_path('robots.txt'));
});


Route::get('/', function () {
    return view('main');
    
});
