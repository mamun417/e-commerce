<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

//newsletter
Route::post('newsletter/store', 'NewsLetterController@store')->name('newsletter.store');


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

    //product
    Route::get('products/change-status/{product}', 'ProductController@changeStatus')
        ->name('products.status.change');
    Route::resource('products', 'ProductController');

    //coupon
    Route::get('coupons/change-status/{coupon}', 'CouponController@changeStatus')
        ->name('coupons.status.change');
    Route::resource('coupons', 'CouponController');

    //newsletter
    Route::resource('newsletters', 'NewsLetterController')->only(['index', 'destroy']);

    //password
    Route::get('password-change', 'AdminController@changePassword')->name('password.change');
    Route::post('password-update', 'AdminController@updatePassword')->name('password.update');
});
