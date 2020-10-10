<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');




//admin authentication
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    // Route::get('/', 'Auth\LoginController@showLoginForm');

    Route::get('/', function () {
        return redirect()->route('admin.login');
    });

    Auth::routes();
});

//admin
Route::group(['middleware' => ['auth:admin'], 'as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    //dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //category
    Route::get('categories/change-status/{category}', 'CategoryController@changeStatus')
        ->name('categories.status.change');
    Route::resource('categories', 'CategoryController');

    //brand
    Route::get('brands/change-status/{brand}', 'BrandController@changeStatus')
        ->name('brands.status.change');
    Route::resource('brands', 'BrandController');

    Route::get('coupons/change-status/{coupon}', 'CouponController@changeStatus')
        ->name('coupons.status.change');
    Route::resource('coupons', 'CouponController');

    //password
    Route::get('password-change', 'AdminController@changePassword')->name('password.change');
    Route::post('password-update', 'AdminController@updatePassword')->name('password.update');
});
