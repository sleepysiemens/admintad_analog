<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LANDING
Route::get('/','App\Http\Controllers\LandingController@index')->name('landing.index');
Route::get('/blog','App\Http\Controllers\BlogController@index')->name('blog.index');
Route::get('/blog/{post}','App\Http\Controllers\BlogController@show')->name('blog.show');

Route::get('/offers','App\Http\Controllers\OfferController@index')->name('offer.index');
Route::get('/offers/{offer}','App\Http\Controllers\OfferController@show')->name('offer.show');



//USER
Route::group(['middleware'=>['auth', \App\Http\Middleware\UserMiddleware::class], 'prefix'=>'webmaster'], function (){
    Route::get('/','App\Http\Controllers\User\MainController@index')->name('user.main.index');

    //OFFERS
    Route::get('/offers','App\Http\Controllers\User\OffersController@index')->name('user.offers.index');
    Route::get('/offer/{offer}','App\Http\Controllers\User\OffersController@show')->name('user.offers.show');
    Route::post('/offer/{offer}/get-link','App\Http\Controllers\User\OffersController@get_link')->name('user.offers.get_link');

    //STATS
    Route::get('/stats','App\Http\Controllers\User\StatController@index')->name('user.stat.index');

    //NEWS
    Route::get('/news','App\Http\Controllers\User\NewsController@index')->name('user.news.index');

    //SOURCES
    Route::get('/sources','App\Http\Controllers\User\SourcesController@index')->name('user.sources.index');
    Route::get('/sources/create','App\Http\Controllers\User\SourcesController@create')->name('user.sources.create');
    Route::put('/sources/store','App\Http\Controllers\User\SourcesController@store')->name('user.sources.store');

    //PROFILE
    Route::get('/profile','App\Http\Controllers\User\ProfileController@index')->name('user.profile.index');
    Route::patch('/profile/update','App\Http\Controllers\User\ProfileController@update')->name('user.profile.update');

    //FAQ
    Route::get('/faq','App\Http\Controllers\User\FaqController@index')->name('user.faq.index');

    //RULES
    Route::get('/rules','App\Http\Controllers\User\RulesController@index')->name('user.rules.index');

    //PAYMENT
    Route::get('/payouts','App\Http\Controllers\User\PayoutsController@index')->name('user.payouts.index');
    Route::put('/payouts/store','App\Http\Controllers\User\PayoutsController@store')->name('user.payouts.store');

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
    Route::get('/news/{news}/delete','App\Http\Controllers\Admin\NewsController@delete')->name('admin.news.delete');

    //SOURCES
    Route::get('/sources','App\Http\Controllers\Admin\SourcesController@index')->name('admin.sources.index');
    Route::get('/sources/auto','App\Http\Controllers\Admin\SourcesController@auto')->name('admin.sources.auto');
    Route::put('/sources/store','App\Http\Controllers\Admin\SourcesController@store')->name('admin.sources.store');
    Route::get('/sources/{source}/delete','App\Http\Controllers\Admin\SourcesController@delete')->name('admin.sources.delete');

    //BLOG
    Route::get('/blog','App\Http\Controllers\Admin\BlogController@index')->name('admin.blog.index');
    Route::get('/blog/create','App\Http\Controllers\Admin\BlogController@create')->name('admin.blog.create');
    Route::put('/blog/store','App\Http\Controllers\Admin\BlogController@store')->name('admin.blog.store');
    Route::get('/blog/{post}','App\Http\Controllers\Admin\BlogController@show')->name('admin.blog.show');
    Route::get('/blog/edit/{post}','App\Http\Controllers\Admin\BlogController@edit')->name('admin.blog.edit');
    Route::patch('/blog/update/{post}','App\Http\Controllers\Admin\BlogController@update')->name('admin.blog.update');
    Route::get('/blog/delete/{post}','App\Http\Controllers\Admin\BlogController@delete')->name('admin.blog.delete');

    //FAQ
    Route::get('/faq','App\Http\Controllers\Admin\FaqController@index')->name('admin.faq.index');
    Route::get('/faq/create','App\Http\Controllers\Admin\FaqController@create')->name('admin.faq.create');
    Route::put('/faq/store','App\Http\Controllers\Admin\FaqController@store')->name('admin.faq.store');
    Route::get('/faq/delete/{question}','App\Http\Controllers\Admin\FaqController@delete')->name('admin.faq.delete');

    //RULES
    Route::get('/rules','App\Http\Controllers\Admin\RulesController@index')->name('admin.rules.index');

    //TICKETS
    Route::get('/tickets','App\Http\Controllers\Admin\TicketsController@index')->name('admin.tickets.index');


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
