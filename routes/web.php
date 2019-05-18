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

Auth::routes();

Route::get('/home', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('send', 'HomeController@sendNotification');

Route::get('/dog', [
    'uses' => 'DogController@create',
]);

Route::post('/create', [
    'uses' => 'DogController@store',
]);

Route::get('/list', [
    'uses' => 'DogController@show',
]);

Route::get('/edit/{id}', [
    'uses' => 'DogController@edit',
]);

Route::post('/update/{id}', [
    'uses' => 'DogController@update',
]);

Route::resource('dogs', 'DogController');
