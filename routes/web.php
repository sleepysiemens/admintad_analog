<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LANDING
Route::get('/','App\Http\Controllers\LandingController@index')->name('landing.index');


//USER
Route::group(['middleware'=>['auth', \App\Http\Middleware\UserMiddleware::class], 'prefix'=>'profile'], function (){
    Route::get('/','App\Http\Controllers\User\MainController@index')->name('user.main.index');
    //
    Route::get('/offers','App\Http\Controllers\User\OffersController@index')->name('user.offers.index');
    Route::get('/offer/{offer}','App\Http\Controllers\User\OffersController@show')->name('user.offers.show');
    Route::get('/offer/{offer}/get-link','App\Http\Controllers\User\OffersController@get_link')->name('user.offers.get_link');
    //
    Route::get('/stats','App\Http\Controllers\User\StatController@index')->name('user.stat.index');

    //NEWS
    Route::get('/news','App\Http\Controllers\User\NewsController@index')->name('user.news.index');


})->middleware('admin');

//ADMIN
Route::group(['middleware'=>['auth', \App\Http\Middleware\AdminMiddleware::class],'prefix'=>'admin'], function (){
    //SETTINGS
    Route::get('/','App\Http\Controllers\Admin\MainController@index')->name('admin.main.index');
    Route::get('/settings','App\Http\Controllers\Admin\SettingsController@index')->name('admin.settings.index');
    Route::post('/settings/save','App\Http\Controllers\Admin\SettingsController@save')->name('admin.settings.save');

    //OFFERS
    Route::get('/offers','App\Http\Controllers\Admin\OffersController@index')->name('admin.offers.index');
    Route::get('/offer/{offer}','App\Http\Controllers\Admin\OffersController@show')->name('admin.offers.show');
    Route::get('/offer/{offer}/edit','App\Http\Controllers\Admin\OffersController@edit')->name('admin.offers.edit');
    Route::patch('/offer/{offer}/update','App\Http\Controllers\Admin\OffersController@update')->name('admin.offers.update');
    Route::delete('/offer/{offer}/delete','App\Http\Controllers\Admin\OffersController@delete')->name('admin.offers.delete');
    Route::get('/offers/create','App\Http\Controllers\Admin\OffersController@create')->name('admin.offers.create');
    Route::put('/offers/store','App\Http\Controllers\Admin\OffersController@store')->name('admin.offers.store');

    //STAT
    Route::get('/stats','App\Http\Controllers\Admin\StatController@index')->name('admin.offers.stats');

    //NEWS
    Route::get('/news','App\Http\Controllers\Admin\NewsController@index')->name('admin.news.index');
    Route::get('/news/create','App\Http\Controllers\Admin\NewsController@create')->name('admin.news.create');
    Route::put('/news/store','App\Http\Controllers\Admin\NewsController@store')->name('admin.news.store');
    Route::get('/news/{news}/edit','App\Http\Controllers\Admin\NewsController@edit')->name('admin.news.edit');
    Route::patch('/news/{news}/update','App\Http\Controllers\Admin\NewsController@update')->name('admin.news.update');


})->middleware('admin');

//REDIRECT
Route::get('/redirect/{link}', 'App\Http\Controllers\RedirectController@index')->name('redirector');

//TEST
Route::get('/test', 'App\Http\Controllers\TestController@index')->name('test');
Route::get('/test2', 'App\Http\Controllers\TestController@test2')->name('test');
Route::get('/postback', 'App\Http\Controllers\PostbackController@index')->name('postback');

Route::get('logout', function (){auth()->logout(); return redirect()->route('login');})->name('logout.get');


//Made by SleepySiemens
//Еще не оплачено
//TG: @sleepysiemens
