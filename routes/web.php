<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register yweb routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// penghubung ke about
Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "active" => 'about'
    ]);
});

// penghubung ke home
Route::get('/',function (){
    return view('home',[
        "title" => 'Home',
        'active' => 'home'
    ]);

});

// penghubung ke kategori
Route::get('/categories',function (){
    return view('categories',[
        "title" => 'Categories',
        'active' => 'categories'
    ]);
});

// penghubung ke halaman register login
Route::get('/login', [])->name('login')->middleware('guest');
Route::post('/login', []);
Route::post('/login', []);

// penghubung ke registrasi
Route::get('/register', [])->middleware('guest');
Route::post('/register', []);

// penghubung ke dashboard author
Route::get('/dashboard', function(){
    return view('dashboard.index');
});

// penghubung ke post author
Route::get('/dashboard/posts/checkSlug', [])->middleware('auth');
Route::resource('/dashboard/post', [])->middleware('auth');

// penghubung ke categori admin
Route::resource('/dashboard', [])->except('show')->middleware('admin');