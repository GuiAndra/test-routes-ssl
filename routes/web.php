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

Route::get('/http', function () {
    return view('http');
})->name('httppage')->middleware('http');


Route::get('/https', function (Request $request) {
    return view('https');
})->name('httpspage')->middleware('https');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
