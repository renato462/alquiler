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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login3', function () {

    return view('/auth/login3');
});

Route::get('login/{socialNetwork}', 'SocialLoginController@redirectToSocialNetwork')
    ->name('login.social')->middleware('guest', 'social_network');
Route::get('login/{socialNetwork}/callback', 'SocialLoginController@handleSocialNetworkCallback')
    ->middleware('guest', 'social_network');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
