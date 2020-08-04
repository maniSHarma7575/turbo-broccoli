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
Route::get('/contact','ContactController@show');
Route::post('/contact/submit','ContactController@store');
Auth::routes();
Route::get('/payments/create','PaymentsController@create')->middleware('auth');
Route::post('/payments/submit','PaymentsController@store')->middleware('auth');
Route::post('/payments/purchase','PaymentsController@purchase')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/notifications','UserNotificationsController@show')->middleware('auth');
