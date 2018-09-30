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
Auth::routes();
Route::get('/', 'PagesController@getIndex')->name('main');
Route::get('/add_menu', 'PagesController@add_menu')->name('add_menu');
Route::post('/add_menu', 'PagesController@insert_menu')->name('insert_menu');
Route::get('/show_menu', 'PagesController@show_menu')->name('show_menu');
Route::get('/order', 'PagesController@show_tables')->name('show_tables');
Route::get('/{table_no}/show_menu', 'PagesController@show_menu_order')->name('show_menu_order');
Route::post('place_order','PagesController@place_order')->name('place_order');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/orders_page', 'PagesController@show_orders')->name('show_orders');
Route::get('/manage_table', 'PagesController@table_manage');
Route::get('/add_new_table', 'PagesController@add_new_table')->name('add_new_table');
Route::post('/complete_order', 'PagesController@complete_order')->name('complete_order');
