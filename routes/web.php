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
    return view('home');
})->name('home');

Route::get('/coming-soon', function () {
    return view('coming-soon');
})->name('coming-soon');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('user');
Route::get('/test', 'HomeController@test')->name('test');
Route::get('role', 'HomeController@my_role')->name('test');

