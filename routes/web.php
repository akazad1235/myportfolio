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
/*
Route::get('/', function () {
    return view('layout.app');
});*/

Route::get('/', 'siteController@home')->name('home');
Route::get('about', 'siteController@about')->name('about');
Route::get('portfolio', 'siteController@portfolio')->name('portfolio');
Route::get('service', 'siteController@service')->name('service');
Route::get('contact', 'siteController@contact')->name('contact');


