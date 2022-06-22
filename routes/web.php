<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignUpController;

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
    "title" => "home",
    "active" => "home"
  ]);
});
Route::get('/about', function () {
  return view('about', [
    "title" => "about",
    "active" => "about"
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

//login
Route::get('/login', [LoginController::class, 'index']);

//sign up
Route::get('/signup', [SignUpController::class, 'index']);
Route::post('/signup', [SignUpController::class, 'store']);
