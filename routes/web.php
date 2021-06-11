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
Route::get('student', 'App\Http\Controllers\StudentController@listStudent');
Route::get('student/{id}', 'App\Http\Controllers\StudentController@getStudent');
Route::get('search', 'App\Http\Controllers\StudentController@search');
Route::post('search', 'App\Http\Controllers\StudentController@searchById');

Route::get('account','App\Http\Controllers\accountController@index');
Route::get('account/{id}','App\Http\Controllers\transactionController@list');
Route::get('transaction',function(){
    return view('transaction.transaction');
});
Route::post('transaction','App\Http\Controllers\transactionController@doTransaction');

Route::get('flight/search','App\Http\Controllers\flightController@searchFlight');
Route::get('flight/booking', function () {
    return view('/booking');
});
Route::post('flight/search', 'App\Http\Controllers\flightController@search');

Route::get('flight/booking/{id}', 'App\Http\Controllers\flightController@booking');
Route::post('flight/booking', 'App\Http\Controllers\flightController@book')->name('book');
