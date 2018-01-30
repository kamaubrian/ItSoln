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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create_quotation','QuotationController@createQuotation');

Route::get('/test_device','DeviceController@getDeviceInformation');

Route::post('/test','DeviceController@store');
Route::get('/my_devices','DeviceController@getClientDevices');

Route::get('/admin',function(){

    return view('technician.admin');
});



