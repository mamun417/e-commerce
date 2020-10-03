<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//Admin authentication
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    // Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Auth::routes();
});

//Admin
Route::get('admin/dashboard', function () {
    return view('admin.home');
})->middleware('auth:admin')->name('admin.dashboard');
