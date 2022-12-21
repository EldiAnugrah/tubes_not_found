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


Route::get('/login', function () {
    return view('login');
});
// penghubung ke home
Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home'
    ]);

});

// penghubung ke kategori
Route::get('/categories',function (){
    return view('categories',[
        "title" => 'Categories',
        'active' => 'categories'

    ]);
});