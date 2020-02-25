<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout')->name('get-logout');

Route::get('/', 'MainController@index')->name('index');
Route::get('/books', 'MainController@books')->name('books');
Route::get('/genres', 'MainController@genres')->name('genres');
Route::get('/authors', 'MainController@authors')->name('authors');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/news', 'MainController@news')->name('news');
Route::get('/contacts', 'MainController@contacts')->name('contacts');


Route::group(['prefix' => 'cart'], function () {
    Route::post('/add/{id}', 'CartController@CartAdd')->name('cart-add');

    Route::group([
        'middleware' => 'cart_not_empty',
    ], function () {
        Route::get('/', 'CartController@cart')->name('cart');
        Route::get('/place', 'CartController@cartPlace')->name('cart-place');
        Route::post('/remove/{id}', 'CartController@cartRemove')->name('cart-remove');
        Route::post('/place', 'CartController@cartConfirm')->name('cart-confirm');
    });
});

Route::get('books/{product?}', 'MainController@product')->name('product');








