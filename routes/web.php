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

Route::get('/', function () {
    return view('welcome');
});

Route::get('google', 'SocialiteController@index');
Route::get('/auth/{provider}', 'SocialiteController@redirect');
Route::get('/callback/{provider}', 'SocialiteController@callback');
Route::get('/home', function (){
    return view('home');
});

Route::get('facebook', 'SocialiteFBController@index');
Route::get('/auth/facebook/{provider}', 'SocialiteFBController@redirect');
Route::get('/callback/facebook/{provider}', 'SocialiteFBController@callback');