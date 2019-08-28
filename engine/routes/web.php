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
Route::prefix('api/v1')->group(function () {
Route::post("userregis","ApiController@userRegis");
Route::post("userktp/{id}","ApiController@userUpdateKTP");
Route::get("coba","ApiController@getAllDriver");
Route::get("loginapi","ApiController@login");
Route::get("logindetails/{id}","ApiController@getUserDetail");
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register-user', 'Auth\RegisterController@viewRegisterUser');
Route::get('/register-partner', 'Auth\RegisterController@viewRegisterPartner');

Route::middleware('admin')->group(function () {
    Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');
    Route::resource('/drivers', 'Admin\DriverController');
    Route::resource('/bids','Admin\BidController');
    Route::resource('/shipments','Admin\ShipmentController');
    Route::resource('/pengiriman', 'Admin\SendShipmentController');
    Route::resource('/admin/truk', 'Admin\TruckController@index');
    Route::get('/admin/pengiriman/belumdikirim', 'Admin\KirimController@index');
    Route::get('/admin/pengiriman/sedangdikirim', 'Admin\KirimController@sedangdikirim');
    Route::get('/admin/truk', 'Admin\TrukController@index');
    Route::get('/administrasi', 'Admin\PenggunaControlller@index');
});
