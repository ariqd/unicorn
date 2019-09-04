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
Route::post("loginapi","ApiController@login");
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
    Route::resource('/admin/drivers', 'Admin\DriverController');
    Route::resource('/admin/bids','Admin\BidController');
    Route::resource('/admin/shipments','Admin\ShipmentController');
    Route::resource('/admin/pengiriman', 'Admin\SendShipmentController');
    Route::resource('/admin/truk', 'Admin\TruckController');
    //Route::get('/admin/pengiriman/sedangdikirim', 'Admin\KirimController@sedangdikirim');
    //Route::get('/admin/truk', 'Admin\TrukController@index');
    Route::get('/admin/pengguna/belumdiproses', 'Admin\PenggunaController@index');
    Route::get('/admin/pengguna/disetujui', 'Admin\PenggunaController@index');
    Route::get('/admin/pengguna/ditolak', 'Admin\PenggunaController@index');
    Route::get('/admin/partner/belumdiproses', 'Admin\PartnerController@index');
    Route::get('/admin/partner/disetujui', 'Admin\PartnerController@index');
    Route::get('/admin/partner/ditolak', 'Admin\PartnerController@index');
});
