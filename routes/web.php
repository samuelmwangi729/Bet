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
Route::get('/Soccer','testController@index');

Auth::routes();
Route::get('/Results','ResultsController@index');
Route::get('/Statistics','StatisticsController@index');
Route::get('/Live','LiveController@index');
Route::get('/Promo','PromoController@index');
Route::get('/Fetch/{gameId}/{sport}/{Home}/{Odd}/{Nature}','fetchController@index')->name('fetch');
Route::get('/Statistics','StatisticsController@index');
Route::get('/Highlights','HighlightController@index');
Route::get('/Volleyball','VolleyballController@index');
Route::get('/Rugby','RugbyController@index');
Route::get('/Tennis','TennisController@index');
Route::get('/Cricket','CricketController@index');
Route::get('/1eda23758be9e36e5e0d2a6a87de584aaca0193f','AController@index');
Route::get('/Betslip','BetController@index');
Route::get('/77cfd8c4ee27a93e2575f9e4ab134273491ac162','BetController@showBets');


Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/test','testsController@index');
Route::get('/Admin',[
    'uses'=>'AdminController@admin',
    'as' =>'admin.index'
]);