<?php

Route::prefix('api/v1')->group(function () {
    Route::post("userregis", "ApiController@userRegis");
    Route::post("userktp/{id}", "ApiController@userUpdateKTP");
    Route::get("coba", "ApiController@getAllDriver");
    Route::post("loginapi", "ApiController@login");
    Route::get("logindetails/{id}", "ApiController@getUserDetail");
});

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/maps', function () {
    return view('layouts.maps');
});

Route::get('/register-user', 'Auth\RegisterUserController@index');
Route::post('/register-user', 'Auth\RegisterUserController@store');

Route::get('/register-partner', 'Auth\RegisterPartnerController@index');
Route::post('/register-partner', 'Auth\RegisterPartnerController@store');
Route::get('logout', 'Auth\LoginController@logout');

Route::middleware('admin')->group(function () {

    Route::get('admin', 'Admin\HomeController@index')->name('admin.home');
    Route::get('admin/test', 'Admin\HomeController@show')->name('admin.home');
    Route::get('admin/shipments/{id}/tracking', 'Admin\ShipmentController@tracking');
    //Route::get('admin/shipments/{lat}/{long}/{lat2}/{long2}/mapper', 'Admin\ShipmentController@mapper');

    Route::resource('admin/drivers', 'Admin\DriverController');
    Route::resource('admin/bids', 'Admin\BidController');
    Route::resource('admin/shipments', 'Admin\ShipmentController');
    Route::resource('admin/pengiriman', 'Admin\SendShipmentController');
    Route::resource('admin/truk', 'Admin\TruckController');
    Route::get('admin/pengguna/belumdiproses', 'Admin\PenggunaController@index');
    Route::get('admin/pengguna/disetujui', 'Admin\PenggunaController@verified');
    Route::get('admin/pengguna/ditolak', 'Admin\PenggunaController@unverified');
    Route::get('admin/partner/belumdiproses', 'Admin\PartnerController@index');
    Route::get('admin/partner/disetujui', 'Admin\PartnerController@verified');
    Route::get('admin/partner/ditolak', 'Admin\PartnerController@unverified');
    Route::resource('admin/pengguna', 'Admin\PenggunaController');
    Route::resource('admin/partner', 'Admin\PartnerController');
});
