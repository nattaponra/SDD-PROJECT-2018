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
    return view('main');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registers', 'HomeController@registerOption');



Route::get("/dashboard","DashboardController@index");

Route::get("/dashboard/profile","UserController@profile");
Route::post("/dashboard/profile/{userId}","UserController@storeProfile");


//Upgrade User
Route::get("/dashboard/upgrade/{type}","UserController@upgradeUser");


//Package Detail
Route::get("/dashboard/package","PackageController@packageDetail");

//Payment
Route::get("/dashboard/payment/{type}","PaymentController@payment");
Route::post("/dashboard/payment/{type}","PaymentController@storePayment");

Route::get("/dashboard/payment/success/{token}","PaymentController@successPayment");



Route::get("logout",function(){
    Auth::logout();
    return redirect("/");
});