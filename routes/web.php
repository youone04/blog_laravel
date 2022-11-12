<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome',[
        "title" => "Laravel",
    ]);
});

Route::get('/about' , function(){
    return view('about' , [
        "title" => "About",
        "nama" => "yudi gunawan"
    ]);
});

Route::get('/home' , function(){
    return view('home',[
        "title" => "Home"
    ]);
});


Route::get('/blog' , [PostController::class ,'index']);
Route::get('/posts/{post:slug}' ,[PostController::class ,'show']);
