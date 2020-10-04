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
Route::group(['middleware' => ['auth:admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    //Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //Password
    Route::get('password-change', 'AdminController@changePassword')->name('password.change');
    Route::post('password-update', 'AdminController@updatePassword')->name('password.update');
});
