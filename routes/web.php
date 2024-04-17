<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome'); // Make sure 'welcome' is the name of your view file in the `resources/views` directory.
})->name('welcome');

Route::namespace('App\Http\Controllers')->group(function () {
    Route::get('/products', 'ProductController@index');
});

