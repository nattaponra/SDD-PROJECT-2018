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
Route::get("/dashboard/package/{type}","PackageController@packageDetail");

//Payment
Route::get("/dashboard/payment/{type}","PaymentController@payment");
Route::post("/dashboard/payment/{type}","PaymentController@storePayment");

Route::get("/dashboard/payment/success/{token}","PaymentController@successPayment");
Route::get("/dashboard/upgrade/success/{token}","PaymentController@successUpgrade");


Route::get("/organizer/management/location","OrganizerController@manageLocation");
Route::get("/organizer/management/location/subarea","OrganizerController@subLocation");
Route::get("organizer/management/location/create","OrganizerController@createLocation");
Route::post("organizer/management/location/create","OrganizerController@storeLocation");
Route::get("organizer/management/location/edit/{areaId}","OrganizerController@editLocation");
Route::post("organizer/management/location/edit/{areaId}","OrganizerController@updateLocation");
Route::get("organizer/management/location/delete/{areaId}","OrganizerController@deleteLocation");
Route::post("organizer/management/storeSubArea","SubAreaController@storeSubArea");
Route::get("organizer/management/deleteSubArea/{subAreaId}","SubAreaController@deleteSubArea");

Route::get("image/area/{area_id}","ImageController@getAreaImage");


Route::get("/dashboard/booking/search","BookingController@search");
Route::get("dashboard/booking/detail/area/{id}","BookingController@detailArea");
Route::get("dashboard/booking/book/{id}","BookingController@payment");
Route::post("dashboard/booking/book/{id}","BookingController@storePayment");
Route::get("dashboard/booking/success","BookingController@successPayment");
Route::get("/dashboard/my-booking","BookingController@myBooking");


Route::get("logout",function(){
    Auth::logout();
    return redirect("/");
});