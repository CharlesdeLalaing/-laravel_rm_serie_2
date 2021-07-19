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
    $nom = 'Charles';
    return view('home', compact('nom'));
});

Route::get('/blog', function () {
    $age = 22;
    return view('pages.blog', compact('age'));
})->name('blog');

Route::get('/contact', function () {
    $sexe = 'homme';
    return view('pages.contact', compact('sexe'));
})->name('contact');