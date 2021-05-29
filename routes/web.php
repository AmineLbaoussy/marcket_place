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

Auth::routes();

Route::get('/accueil', 'HomeController@index')->name('accueil');

/*Route::get('/office', 'HomeController@index')->name('accueil');

Route::get('/adjointe', 'HomeController@index')->name('accueil');
*/

        Route::group(['prefix'=>'office','namespace'=>'admin'],function () {
             Route::get('/','AdminController@index')->name('office');
        });

        Route::group(['prefix'=>'adjointe','namespace'=>'admin'],function () {
             Route::get('/','ModeratorController@index')->name('adjointe');
        });