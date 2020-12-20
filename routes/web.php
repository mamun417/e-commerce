<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**********************************
 * start frontend routes
 **********************************/

Route::get('/', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

// product
Route::get('product/{slug}', 'ProductController@show')->name('product.show');

// wishlist
Route::get('wishlist', 'WishlistController@index')->name('wishlist.index');
Route::get('wishlist/{slug}', 'WishlistController@add')->name('wishlist.add');
Route::get('wishlist/remove/{rowId}', 'WishlistController@remove')->name('wishlist.remove');
Route::get('wishlist/move-cart/{rowId}', 'WishlistController@moveToCart')->name('wishlist.move-to-cart');

// cart
Route::get('cart', 'CartController@index')->name('cart.index');
Route::match(['get', 'post'], 'cart/{slug}', 'CartController@store')->name('cart.store');
Route::get('cart/remove/{rowId}', 'CartController@remove')->name('cart.remove');
Route::get('cart-empty', 'CartController@empty')->name('cart.empty');
Route::post('coupon/apply', 'CouponController@apply')->name('coupon.apply');

Route::group(['middleware' => ['auth']], function () {
    // checkout
    Route::get('checkout', 'CheckoutController@checkout')->name('checkout');
    Route::post('checkout', 'CheckoutController@orderSubmit');
});


Route::group(['middleware' => ['auth'], 'as' => 'user.'], function () {

    // profile
    Route::get('my-account', 'UserController@profile')->name('profile');

    // password
    Route::get('change-password', 'UserController@changePassword')->name('change-password');
    Route::post('update-password', 'UserController@updatePassword')->name('update-password');
});


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

    // settings
    Route::get('settings', 'SettingController@show')->name('setting.show');
    Route::put('settings', 'SettingController@update')->name('setting.update');

    // password
    Route::get('password-change', 'AdminController@changePassword')->name('password.change');
    Route::post('password-update', 'AdminController@updatePassword')->name('password.update');
});

/**********************************
 * end admin authentication
 **********************************/
