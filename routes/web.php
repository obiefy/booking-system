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

// VISITORS ROUTES
Route::get('/', function () {
    return view('welcome');
});

// Agents search
Route::get('/agents', "UserController@search_form")->name('agents.show_all');
Route::post('/agents', "UserController@search")->name('agents.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



// SUPER ADMIN ROUTES
Route::prefix('admin')->group(function () {
    
    // Agents routes
    Route::resource('agent', 'UserController');
});

// AGENT ADMIN ROUTES
Route::prefix('agent')->group(function () {
    
    // Booking routes
    Route::get('bookings', 'BookingController@index')->name('booking.index');

    // Prices routes
    Route::resource('price', 'PriceController');
});




