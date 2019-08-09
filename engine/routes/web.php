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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-user', 'Auth\RegisterController@viewRegisterUser');
Route::get('/register-partner', 'Auth\RegisterController@viewRegisterPartner');

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
});
