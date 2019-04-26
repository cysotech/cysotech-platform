<?php

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
    return view('Front-End.index');
})->name('index');

Route::get('/services', function () {
    return view('Front-End.services');
})->name('services');

Route::get('/blog', function () {
    return view('Front-End.blog');
})->name('blog');

Route::get('/contact', function () {
    return view('Front-End.contact');
})->name('contact');

// Route::get('/contact', function () {
//     return view('Front-End.contact');
// })->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
