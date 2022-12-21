<?php

use App\Http\Controllers\ProfileController;
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
// penghubung ke about
Route::get('/', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about'
    ]);
});

//penghubung home
Route::get('/login', function () {
    return view('login');
});

// penghubung ke home
Route::get('/home', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

// penghubung ke kategori
Route::get('/category', function () {
    return view('category', [
        "title" => 'Category',
        'active' => 'category'

    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
