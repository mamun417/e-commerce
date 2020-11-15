<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**********************************
 * start frontend routes
 **********************************/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

// newsletter
Route::post('newsletter/store', 'NewsLetterController@store')->name('newsletter.store');

/**********************************
 * end frontend routes
 **********************************/


/**********************************
 * start admin routes
 **********************************/

// authentication
Route::get('/admin', function () {
    return redirect()->route('admin.login');
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Auth::routes();
});

// admin
Route::group([
    'middleware' => ['auth:admin'],
    'as' => 'admin.',
    'prefix' => 'admin',
    'namespace' => 'Admin'
], function () {

    // dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // category
    Route::get('categories/change-status/{category}', 'CategoryController@changeStatus')
        ->name('categories.status.change');
    Route::resource('categories', 'CategoryController');

    // brand
    Route::get('brands/change-status/{brand}', 'BrandController@changeStatus')
        ->name('brands.status.change');
    Route::resource('brands', 'BrandController');

    // product
    Route::get('products/change-status/{product}', 'ProductController@changeStatus')
        ->name('products.status.change');
    Route::resource('products', 'ProductController');

    // coupon
    Route::get('coupons/change-status/{coupon}', 'CouponController@changeStatus')
        ->name('coupons.status.change');
    Route::resource('coupons', 'CouponController');

    // newsletter
    Route::resource('newsletters', 'NewsLetterController')->only(['index', 'destroy']);

    // password
    Route::get('password-change', 'AdminController@changePassword')->name('password.change');
    Route::post('password-update', 'AdminController@updatePassword')->name('password.update');
});

/**********************************
 * end admin authentication
 **********************************/
