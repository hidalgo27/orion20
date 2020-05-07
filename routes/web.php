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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [
    'uses' => 'Page\HomepageController@index',
    'as' => 'home_path',
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/product_store', [
    'uses' => 'ProductController@store',
    'as' => 'purchase_store_path',
]);

Route::get('/category/{category}', [
    'uses' => 'ProductController@category',
    'as' => 'category_index_path',
]);
Route::get('/cart/{id}', [
    'uses' => 'ProductController@cart',
    'as' => 'cart_show_path',
]);
Route::get('/checkout/{id}', [
    'uses' => 'ProductController@checkout',
    'as' => 'checkout_path',
]);
Route::get('/checkout/address/{id}', [
    'uses' => 'ProductController@checkout_address',
    'as' => 'checkout_address_path',
]);
Route::get('/checkout/payment/{id}', [
    'uses' => 'ProductController@checkout_payment',
    'as' => 'checkout_payment_path',
]);
Route::get('/detail/{id}', [
    'uses' => 'ProductController@detail',
    'as' => 'detail_show_path',
]);




Route::post('/add', [
    'uses' => 'Page\HomepageController@add',
    'as' => 'add_path',
]);

Route::get('/cart', [
    'uses' => 'Page\HomepageController@cart',
    'as' => 'cart_path',
]);

Route::delete('/cart/{id}', [
    'uses' => 'Page\HomepageController@destroy',
    'as' => 'destroy_path',
]);
