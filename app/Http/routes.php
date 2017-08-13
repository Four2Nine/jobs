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
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
});

Route::get('account/register', function () {
    return view('account.register');
});

Route::get('account/login', function () {
    return view('account.login');
});

Route::get('account/findPassword', function () {
    return view('account.findPassword');
});

Route::get('account/index', function () {
    return view('account.index');
});
