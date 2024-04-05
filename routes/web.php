<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//USER
Route::group(['middleware'=>['auth', \App\Http\Middleware\UserMiddleware::class]], function (){
    Route::get('/','App\Http\Controllers\User\MainController@index')->name('user.main.index');
    //
    Route::get('/offers','App\Http\Controllers\User\OffersController@index')->name('user.offers.index');
    Route::get('/offer/{offer}','App\Http\Controllers\User\OffersController@show')->name('user.offers.show');
    Route::get('/offer/{offer}/get-link','App\Http\Controllers\User\OffersController@get_link')->name('user.offers.get_link');
    //
    Route::get('/stats','App\Http\Controllers\User\StatController@index')->name('user.stat.index');

})->middleware('admin');

//ADMIN
Route::group(['middleware'=>['auth', \App\Http\Middleware\AdminMiddleware::class],'prefix'=>'admin'], function (){
    Route::get('/','App\Http\Controllers\Admin\MainController@index')->name('admin.main.index');
    //
    Route::get('/offers','App\Http\Controllers\Admin\OffersController@index')->name('admin.offers.index');
    Route::get('/offer/{offer}','App\Http\Controllers\Admin\OffersController@show')->name('admin.offers.show');
    Route::get('/offer/{offer}/edit','App\Http\Controllers\Admin\OffersController@edit')->name('admin.offers.edit');
    Route::patch('/offer/{offer}/update','App\Http\Controllers\Admin\OffersController@update')->name('admin.offers.update');
    Route::delete('/offer/{offer}/delete','App\Http\Controllers\Admin\OffersController@delete')->name('admin.offers.delete');
    Route::get('/offers/create','App\Http\Controllers\Admin\OffersController@create')->name('admin.offers.create');
    Route::post('/offer/store','App\Http\Controllers\Admin\OffersController@store')->name('admin.offers.store');
    //
    Route::get('/stats','App\Http\Controllers\Admin\StatController@index')->name('admin.offers.stats');


})->middleware('admin');

//REDIRECT
Route::get('/redirect/{link}', 'App\Http\Controllers\RedirectController@index')->name('redirector');

Route::get('logout', function (){auth()->logout(); return redirect()->route('login');})->name('logout.get');


//Made by SleepySiemens
//Еще не оплачено
//TG: @sleepysiemens
