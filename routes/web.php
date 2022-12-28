<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardPostController;

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
// penghubung ke Home
Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

//penghubung ke about
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about'
    ]);
});

//penghubung Login
Route::get('/login', function () {
    return view('login');
});

// penghubung ke posts
Route::get('/posts', [PostController::class, 'index']);

// single post
Route::get('posts/{post:slug}', [PostController::class, 'show']);

// penghubung ke kategori
Route::get('/category', function () {
    return view('category', [
        "title" => 'Category',
        'active' => 'category',
        'categories' => Category::all()
    ]);
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// kodingan kelola post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
