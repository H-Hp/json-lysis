<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
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
Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});


//Route::get('/', function () {return view('main');});
Route::get('/', [MainController::class, 'index']);

//viteでbuildしたcssやjsへアクセスできるように
Route::get('/build/{any}', function ($any) {
    $extensions = substr($any, strrpos($any, '.') + 1);
    $mine_type=[
        "css"=>"text/css",
        "js"=>"application/javascript"
    ];
    if(!array_key_exists($extensions,$mine_type)){
        return \App::abort(404);
    }
    if(!file_exists(public_path() . '/build/'.$any)){
        return \App::abort(404);
    }
    return response(\File::get(public_path() . '/build/'.$any))->header('Content-Type',$mine_type[$extensions]);
})->where('any', '.*');