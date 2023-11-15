<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DashboardPostController;
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

// Public routes
Route::get('/', [PostController::class, 'index']);

// Routes accessible only for logged-in users
Route::middleware(['auth'])->group(function () {
    Route::get('/contact', function () {
        return view('contact', [
            "title" => "contact",
            "active" => "contact"
        ]);
    });

    Route::get('/portfolio', function () {
        return view('portfolio', [
            "title" => "portfolio",
            "active" => "portfolio",
        ]);
    });

    Route::get('/about', function () {
        return view('about', [
            "title" => "about",
            "active" => "about",
        ]);
    });

    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // Other dashboard routes
    Route::get('/dashboard/checkSlug', [DashboardPostController::class, 'checkSlug']);
    Route::resource('/dashboard/posts', DashboardPostController::class);
});

// Post-related routes
Route::get('/posts', [PostController::class, 'index']);
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// City-related routes
Route::get('/cities', [CityController::class, 'index']);
Route::get('/cities/{city:slug}', [CityController::class, 'show']);

// Authentication routes
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Sign up routes
Route::get('/signup', [SignUpController::class, 'index'])->middleware('guest')->name('sign up');
Route::post('/signup', [SignUpController::class, 'store']);
