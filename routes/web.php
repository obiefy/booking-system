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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Agents routes
Route::resource('agent', 'UserController');

// Agents search
Route::get('/search', "UserController@search_form")->name('agents.show_all');
Route::post('/search', "UserController@search")->name('agents.search');

