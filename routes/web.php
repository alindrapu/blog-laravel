<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PostController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Models\City;
use App\Models\Post;


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
//All Post
Route::get('/posts', [PostController::class, 'index']);
// Single Post Page
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//all cities
Route::get('/cities', [CityController::class, 'index']);
//single cities
Route::get('/cities/{city:slug}', [CityController::class, 'show']);
//authors list
Route::get('/authors/{author:name}', function (User $author){
    return view('posts', [
        "title" => "Authors Journeys : $author->name",
        "posts" => $author->posts->load(['city', 'user'])
    ]);
});