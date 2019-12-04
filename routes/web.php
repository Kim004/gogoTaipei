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
    return view('my_view.index');
})->name('home');

Route::get('about', function () {
    return view('my_view.about');
})->name('about');

Route::get('listings', function () {
    return view('my_view.listings');
})->name('listings');

Route::get('contact', function () {
    return view('my_view.contact');
})->name('contact');

Route::get('blog', function () {
    return view('my_view.blog');
})->name('blog');


Route::get('home', function () {
    return view('my_view.home');
})->name('home');

Route::get('index', function () {
    return view('my_view.index');
})->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
