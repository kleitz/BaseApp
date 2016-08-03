<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layouts.master');
});

Route::get('/login', function () {
    return view('forms.login');
});

Route::get('/register', function () {
    return view('forms.register');
});

Route::get('/password-reset', function () {
    return view('forms.password-reset');
});
Route::get('/password-confirm', function () {
    return view('forms.password-reset-form');
});
