<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\OfferController;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\User\MainController;
use App\Http\Controllers\User\OffersController;
use App\Http\Controllers\User\StatController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\SourcesController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\FaqController;
use App\Http\Controllers\User\RulesController;
use App\Http\Controllers\User\PayoutsController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\SettingsController as AdminSettingsController;
use App\Http\Controllers\Admin\OffersController as AdminOffersController;
use App\Http\Controllers\Admin\StatController as AdminStatController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\SourcesController as AdminSourcesController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\FaqController as AdminFaqController;
use App\Http\Controllers\Admin\RulesController as AdminRulesController;
use App\Http\Controllers\Admin\TicketsController as AdminTicketsController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\PostbackController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//LANDING
Route::get('/',[LandingController::class, 'index'])->name('landing.index');
Route::get('/blog',[BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}',[BlogController::class, 'show'])->name('blog.show');

Route::get('/offers',[OfferController::class, 'index'])->name('offer.index');
Route::get('/offers/{offer}',[OfferController::class, 'show'])->name('offer.show');



//USER
Route::group(['middleware'=>['auth', UserMiddleware::class], 'prefix'=>'webmaster'], function () {
    Route::get('/',[MainController::class, 'index'])->name('user.main.index');

    //OFFERS
    Route::get('/offers',[OffersController::class, 'index'])->name('user.offers.index');
    Route::get('/offer/{offer}',[OffersController::class, 'show'])->name('user.offers.show');
    Route::post('/offer/{offer}/get-link',[OffersController::class, 'get_link'])->name('user.offers.get_link');

    //STATS
    Route::get('/stats',[StatController::class, 'index'])->name('user.stat.index');

    //NEWS
    Route::get('/news',[NewsController::class, 'index'])->name('user.news.index');

    //SOURCES
    Route::get('/sources',[SourcesController::class, 'index'])->name('user.sources.index');
    Route::get('/sources/create',[SourcesController::class, 'create'])->name('user.sources.create');
    Route::put('/sources/store',[SourcesController::class, 'store'])->name('user.sources.store');

    //PROFILE
    Route::get('/profile',[ProfileController::class, 'index'])->name('user.profile.index');
    Route::patch('/profile/update',[ProfileController::class, 'update'])->name('user.profile.update');

    //FAQ
    Route::get('/faq',[FaqController::class, 'index'])->name('user.faq.index');

    //RULES
    Route::get('/rules',[RulesController::class, 'index'])->name('user.rules.index');

    //PAYMENT
    Route::get('/payouts',[PayoutsController::class, 'index'])->name('user.payouts.index');
    Route::put('/payouts/store',[PayoutsController::class, 'store'])->name('user.payouts.store');

})->middleware('admin');


//ADMIN
Route::group(['middleware'=>['auth', \App\Http\Middleware\AdminMiddleware::class],'prefix'=>'admin'], function (){
    //SETTINGS
    Route::get('/', [AdminMainController::class, 'index'])->name('admin.main.index');
    Route::get('/settings', [AdminSettingsController::class, 'index'])->name('admin.settings.index');
    Route::post('/settings/save', [AdminSettingsController::class, 'save'])->name('admin.settings.save');

    //OFFERS
    Route::get('/offers', [AdminOffersController::class, 'index'])->name('admin.offers.index');
    Route::get('/offer/{offer}', [AdminOffersController::class, 'show'])->name('admin.offers.show');
    Route::get('/offer/{offer}/edit', [AdminOffersController::class, 'edit'])->name('admin.offers.edit');
    Route::patch('/offer/{offer}/update', [AdminOffersController::class, 'update'])->name('admin.offers.update');
    Route::delete('/offer/{offer}/delete', [AdminOffersController::class, 'delete'])->name('admin.offers.delete');
    Route::get('/offers/create', [AdminOffersController::class, 'create'])->name('admin.offers.create');
    Route::put('/offers/store', [AdminOffersController::class, 'store'])->name('admin.offers.store');

    //STAT
    Route::get('/stats', [AdminStatController::class, 'index'])->name('admin.offers.stats');

    //NEWS
    Route::get('/news', [AdminNewsController::class, 'index'])->name('admin.news.index');
    Route::get('/news/create', [AdminNewsController::class, 'create'])->name('admin.news.create');
    Route::put('/news/store', [AdminNewsController::class, 'store'])->name('admin.news.store');
    Route::get('/news/{news}/edit', [AdminNewsController::class, 'edit'])->name('admin.news.edit');
    Route::patch('/news/{news}/update', [AdminNewsController::class, 'update'])->name('admin.news.update');
    Route::get('/news/{news}/delete', [AdminNewsController::class, 'delete'])->name('admin.news.delete');

    //SOURCES
    Route::get('/sources', [AdminSourcesController::class, 'index'])->name('admin.sources.index');
    Route::get('/sources/auto', [AdminSourcesController::class, 'auto'])->name('admin.sources.auto');
    Route::put('/sources/store', [AdminSourcesController::class, 'store'])->name('admin.sources.store');
    Route::get('/sources/{source}/delete', [AdminSourcesController::class, 'delete'])->name('admin.sources.delete');

    //BLOG
    Route::get('/blog', [AdminBlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [AdminBlogController::class, 'create'])->name('admin.blog.create');
    Route::put('/blog/store', [AdminBlogController::class, 'store'])->name('admin.blog.store');
    Route::get('/blog/{post}', [AdminBlogController::class, 'show'])->name('admin.blog.show');
    Route::get('/blog/edit/{post}', [AdminBlogController::class, 'edit'])->name('admin.blog.edit');
    Route::patch('/blog/update/{post}', [AdminBlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/blog/delete/{post}', [AdminBlogController::class, 'delete'])->name('admin.blog.delete');

    //FAQ
    Route::get('/faq', [AdminFaqController::class, 'index'])->name('admin.faq.index');
    Route::get('/faq/create', [AdminFaqController::class, 'create'])->name('admin.faq.create');
    Route::put('/faq/store', [AdminFaqController::class, 'store'])->name('admin.faq.store');
    Route::get('/faq/delete/{question}', [AdminFaqController::class, 'delete'])->name('admin.faq.delete');

    //RULES
    Route::get('/rules', [AdminRulesController::class, 'index'])->name('admin.rules.index');

    //TICKETS
    Route::get('/tickets', [AdminTicketsController::class, 'index'])->name('admin.tickets.index');


})->middleware('admin');

//REDIRECT
Route::get('/redirect/{link}',  [RedirectController::class, 'index'])->name('redirector');

//TEST
#Route::get('/test', 'App\Http\Controllers\TestController@index')->name('test');
#Route::get('/test2', 'App\Http\Controllers\TestController@test2')->name('test');
Route::get('/postback', [PostbackController::class, 'index'])->name('postback');

Route::get('logout', function (){auth()->logout(); return redirect()->route('login');})->name('logout.get');


//Made by SleepySiemens
//Еще не оплачено
//TG: @sleepysiemens
