<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Artikelcontroller;
use App\Models\Blog;

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
    return view('home');
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


// Route::get('/blog', [Artikelcontroller::class, 'index'])->name('artikel.index');
// Route::get('/detail/{id}', [Artikelcontroller::class, 'detail'])->name('artikel.detail');

Route::get('/blog', function () {
    return view('blog', [
        "title" => "blog"
    ]);
});

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/blog2', function () {
    return view('blog2', [
        "title" => "post",
        "posts" => blog::all()
    ]);
});

Route::get('/blog2/{slug}', function ($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" =>Blog::getBySlack($slug)
    ]);
});

Route::get('/blog', function () {
    return view('blog',[
        "nama" => "Afifah Fauziah",
        "email" => "afifahfauziah251@gmail.com",
        "gambar" => "me.jpg"
    ]);
});

