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

Route::get("logout",function(){
    Auth::logout();
    return redirect("/");
});