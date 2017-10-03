<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

//Route::get('/contact', 'PagesController@contact')

Route::get('/contact', 'TicketsController@create');

Route::post('/contact', 'TicketsController@store');

Route::get('/tickets', 'TicketsController@showAll');

Route::get('/ticket/{slug?}', 'TicketsController@show');

Route::get('/ticket/{slug?}/edit', 'TicketsController@edit');

Route::post('/ticket/{slug?}/edit', 'TicketsController@update');
// Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');

// Route::post('users/register', 'Auth\RegisterController@register');

