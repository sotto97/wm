<?php

use GuzzleHttp\Middleware;
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

Route::get('/top', function () {
    return view('top');
});

Route::get('/root', function () {
    return view('root');
});

// user 認証の記述
Auth::routes();

// workout 関連のルーティング
Route::group(['prefix' => 'wo'], function () {
    Route::get('', 'WorkoutController@index')->name('wo.index');
    Route::get('create', 'WorkoutController@create')->name('wo.create');
});

// Route::group(['prefix' => 'wo', 'middleware' => 'auth'], function () {

Route::get('/home', 'HomeController@index')->name('home');
