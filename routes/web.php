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

Route::get('/', 'PagesController@getIndex')->name('main');
Route::get('/cookpage', 'PagesController@getCookPage')->name('cookpage');
Route::get('/waiterpage', 'PagesController@getWaiterPage')->name('waiterpage');
// Route::get('/menu', 'PagesController@getMenu')->name('getMenu');

Route::get('Order/{id}', 'PagesController@getMenu')->name('menu');

Route::post('Order)', 'PagesController@placeOrder')->name('placeOrder');



// Route::controller('Order/{id}', 'PagesController');

