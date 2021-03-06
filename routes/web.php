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

Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('pages-logout', 'DashboardController@logout');
    Route::get('home', 'DashboardController@index')->name('home');
    Route::get('brands', 'MintonController@brands')->name('brands');
	Route::get('frames', 'MintonController@frames')->name('frames');
	Route::get('stores', 'MintonController@stores')->name('stores');
});

Route::get('singleframe', 'MintonController@single_frame')->name('singleframe');
