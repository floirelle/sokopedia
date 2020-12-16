<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('home');
});

Route::group(["middleware"=>'sokopedia:Member'],function(){
    Route::get('/cart','CartController@viewCart');
    Route::post('/addtocart','CartController@insert');
    Route::post('/deleteFromCart','CartController@delete');
    Route::post('/checkout','CartController@checkout');
    Route::get('/product/{id}','ProductController@viewDetail');
    Route::get('/addtocart/{id}','ProductController@addToCart');
    Route::get('/history','TransactionController@viewHistory');
Route::post('/getDetails','TransactionController@getDetail');
});

Route::group(["middleware"=>'sokopedia:Admin'],function(){
    Route::get('/admin', 'HomeController@adminHome');
    Route::get('/add-product', 'ProductController@add');
    Route::post('/store-product', 'ProductController@store');
    Route::get('/list-product', 'ProductController@viewAllProduct');
    Route::get('/delete-product/{id}', 'ProductController@deleteProduct');
    Route::get('/list-category', 'CategoryController@viewAllCategory');
    Route::get('/add-category', 'CategoryController@add');
    Route::post('/store-category', 'CategoryController@store');  
});
Route::get('/search','ProductController@search');
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
