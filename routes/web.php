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



Route::get('/', 'pagesController@getHome');

Route::get('/about', 'pagesController@getAbout');

Route::get('/contact', 'pagesController@getContact');

 Route::get('/messages', 'MessagesController@getMessages');

 Route::get('/services', 'ServiceController@getServices');

 Route::get('/updatedetails', 'ServiceController@showServices');

 Route::name('updateService')->post('updateService', 'ServiceController@submit');

 Route::name('updateProduct')->post('updateProduct', 'ServiceController@product');

 Route::name('updateOther')->post('updateOther', 'ServiceController@service');
 

Route::post('/contact/submit', 'MessagesController@submit');



Route::get('/check', 'bookingController@getCheck');

Route::name('navigation1')->post('navigation1', 'bookingController@submit');



 Route::name('check')->get('check', 'pagesController@getcheck');

 
 Route::get('/book', 'bookingController@getBookingpage');

 Route::name('navigation2')->post('navigation2', 'bookingController@edit');
 
 Route::get('/bookingDetails', 'bookingController@getBookingEmail');

 
 Route::name('booknow')->post('booknow', 'bookingController@createBooking');

 
Route::get('/booking/create', 'bookingController@bookredirect');

Route::get('/imageUpload', 'ImageUploadController@imageUpload');




Route::name('moveImage')->post('moveImage', 'ImageUploadController@imageUploadPost');


//Gallery
Route::view('/gallery','gallery');

Route::view('/postUpdatedDetails','postUpdatedDetails');

Route::view('/postUpdatedProducts','postUpdatedProducts');

Route::view('/postUpdatedServices','postUpdatedServices');







//Upload Video
Route::view('/uploadvideo','uploadvideo');
Route::name('submitvideo')->post('submitvideo', 'ImageUploadController@videoUploadPost');   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
