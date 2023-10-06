<?php

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
    return view('welcome');
});
Route::get('/nama', function () {
    return ('Afifah Fauziah');
});
Route::get('/nim', function () {
    return ('21.31.0004');
});
Route::get('index', function () {
    return view('layouts/index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog',[
        "nama" => "Afifah Fauziah",
        "email" => "afifahfauziah251@gmail.com",
        "gambar" => "me.jpg"
    ]);
});