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

Route::get('/client/list', 'ClientController@list')->name('client.list');
Route::post('/client/save', 'ClientController@save')->name('client.save');
Route::post('/client/update/{client}', 'ClientController@save')->name('client.update');
