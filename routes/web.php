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

Route::get('api/integer-to-roman/{the_integer}', 'RomanNumeralsServiceController@integerToRoman');
Route::get('api/recent-conversions/{top}', 'RomanNumeralsServiceController@recentConversions');
Route::get('api/popular-conversions/{top}', 'RomanNumeralsServiceController@popularConversions');
Route::get('api/recent-conversions', 'RomanNumeralsServiceController@recentConversions');
Route::get('api/popular-conversions', 'RomanNumeralsServiceController@popularConversions');