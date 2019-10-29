<?php
use Carbon\Carbon;

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

Route::get('/','HomeController@index');

Route::get('/About','AboutController@index');
Route::get('/Contact','ContactController@index');
Route::get('/login','LoginController@index');
Route::get('/Account','AccountController@index');
Route::resource('Search', 'SearchController');

Auth::routes();
