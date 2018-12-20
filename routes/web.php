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

Route::get('/', 'FrontController@index');

Route::prefix('front')->group(function () {
    Route::get('/upgrade', 'HomeController@upgrade')->name('upgrade');

});

Auth::routes();


Route::prefix('admin')->group(function () {
    //Route::get('/template_new', 'TemplateController@new');

    Route::get('/video_home', 'VideoController@home');
    Route::get('/video_convert', 'VideoController@convert');


});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'HomeController@profile')->name('profile');


Route::get('/payment_success', 'PaymentController@payment_success')->name('payment_success');
Route::post('/subscribe', 'PaymentController@subscribe')->name('subscribe');



// end