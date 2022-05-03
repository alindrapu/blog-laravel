<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;


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
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});
Route::get('/posts', [PostController::class, 'index']);


// Single Post Page
Route::get('posts/{post:slug}', [PostController::class, 'show']);