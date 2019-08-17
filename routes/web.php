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


//guest
Route::get('/', 'ProjectController@index')->name('home');
Route::get('/project/{project}', 'ProjectController@show')->middleware('project.views')->name('project');
Route::get('/disclaimer', 'StaticPageController@disclaimer')->name('disclaimer');
Route::get('/terms-and-privacy', 'StaticPageController@tos')->name('tos');
Route::get('/about-us', 'StaticPageController@about')->name('about');
Route::get('/contact-us', 'StaticPageController@contact')->name('contact');
Route::post('/contact', 'ContactFormSubmitController@store')->name('contact.submit');

//auth
Auth::routes();
Route::get('login/provider/{provider}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.provider.callback');
Route::middleware(['auth'])->group(function () {
	Route::get('submit-code', 'SubmitCodeController@create')->name('submit.code');
	Route::post('submit-code', 'SubmitCodeController@store')->name('submit.code.store');
});

// auth admin
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

