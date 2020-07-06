<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function(){
	return view('frontend.index');
});

Route::get('/master', function(){
	return view('backend.master');
});


Route::get('/detail', function(){
	return view('frontend.detail');
});

Route::get('/login',function(){
	return view('frontend.login');
});

Route::get('/booking',function(){
	return view('frontend.booking');
});

Route::resource('townships','backend\TownshipController');

Route::resource('movies','backend\MovieController');

Route::resource('rundates','backend\Run_dateController');

Route::resource('showtimes','backend\ShowtimeController');
Route::resource('cities','backend\CityController');
Route::resource('cinemas','backend\CinemaController');
Route::resource('theaters','backend\TheaterController');
Route::resource('bookings','backend\BookingController');

Route::get('/','frontend\FrontendController@index')->name('index');


