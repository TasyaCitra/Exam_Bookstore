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

Route::get('/', 'MainController@index');
Route::get('/input', 'MainController@input');
Route::post('/input', 'MainController@author')->name('input.author');
Route::get('/menu', 'MainController@menu');
Route::post('/menu', 'MainController@paginate')->name('menu.paginate');
