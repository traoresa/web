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
Route::redirect('lara-admin','login');
Route::post('/')->name('welcome');
Route::post('/reservation','ReservationController@reserve')->name('reservation.reserve');
Route::post('/contact','ContactController@sendMessage')->name('layouts.site.contact');

Route::get('/nous', function () {
    return view('layouts.site.nous');
});
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function(){
    return view('layouts.site.contact');
});
Route::get('/service', function(){
    return view('layouts.site.service');
});
Route::get('/realisation', function(){
    return view('layouts.site.realisation');
});
Route::get('/rdv', function(){
    return view('layouts.site.rendez-vous');
});
Route::post('/rdv','ReservationController@reserve')->name('layouts.site.rendez-vous');

Route::get('/realisation','HomeController@index')->name('layouts.site.realisation');

Route::get('/blog', function(){
    return view('layouts.site.blog');
});

Route::get('/blog','SliderController@index')->name('layouts.site.blog');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function (){
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController');
    Route::resource('category','CategoryController');
    Route::resource('item','ItemController');
    Route::get('reservation','ReservationController@index')->name('reservation.index');
    Route::post('reservation/{id}','ReservationController@status')->name('reservation.status');
    Route::delete('reservation/{id}','ReservationController@destory')->name('reservation.destory');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});