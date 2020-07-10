<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth/login');
});

Route::get('register', function () {
    return view('auth/register');
});
Route::get('contact', function () {
    return View('contactus');
});
Route::get('sell', function () {
    return View('sell');
});
Route::get('buy', function () {
    return View('buy');
});
Route::get('hom', function () {
    return View('home');
});
Route::get('request', function () {
    return View('admin.request');
});
Route::get('add', function () {
    return View('admin.add');
});
Route::get('admin', function () {
    return View('admin.admin');
});
Route::get('checkout', function () {
    return View('checkout');
});
Route::post('online', function () {
    return View('success');
});
Route::get('remove','AdminController@products');


Route::post('sell','SellController@sell');
Route::post('add','AdminController@add');
Route::post('final','BuyController@final');
Route::post('online','BuyController@final');

Route::get('cart','BuyController@showcart');
Route::get('status','SellController@status');
Route::get('buy','BuyController@product');
Route::get('request','AdminController@requests');
Route::get('cart/{id}','BuyController@cart');
Route::get('los/{id}','BuyController@removecart');
Route::get('total/{id}','BuyController@lolcart');

Route::get('approve/{id}','AdminController@approve');
Route::get('disapprove/{id}','AdminController@disapprove');
Route::get('remove/{id}','AdminController@removeProduct');
// Route::get('checkout','BuyController@checkout');
Route::get('{id}','BuyController@buy');

Auth::routes();

// Route::get('', 'HomeController@index')->name('home');
