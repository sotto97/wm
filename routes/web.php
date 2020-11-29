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

// Route::get('/root', function () {
//     return view('root');
// });


Route::get('/', function () {
    return view('top');
});

Route::get('/a', function () {
    return view('a');
});

// user 認証の記述
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// workout 関連のルーティング
Route::group(['prefix' => 'wo', 'middleware' => 'auth'], function () {
    Route::get('', 'WorkoutController@index')->name('wo.index');
    Route::get('create', 'WorkoutController@create')->name('wo.create');
    Route::post('store', 'WorkoutController@store')->name('wo.store');
    Route::get('{id}', 'WorkoutController@show')->name('wo.show');
    Route::get('edit/{id}', 'WorkoutController@edit')->name('wo.edit');
    Route::post('update/{id}', 'WorkoutController@update')->name('wo.update');
    Route::post('destroy/{id}', 'WorkoutController@destroy')->name('wo.destroy');
});

Route::group(['prefix' => 'condition', 'middleware' => 'auth'], function () {
    Route::get('', 'ConditionController@index')->name('condition.index');
    Route::get('create', 'ConditionController@create')->name('condition.create');
    Route::post('store', 'ConditionController@store')->name('condition.store');
    Route::get('{id}', 'ConditionController@show')->name('condition.show');
    Route::get('edit/{id}', 'ConditionController@edit')->name('condition.edit');
    Route::post('update/{id}', 'ConditionController@update')->name('condition.update');
    Route::post('destroy/{id}', 'ConditionController@destroy')->name('condition.destroy');
});
