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

Route::get('/', 'CRUDController@ShowImage');
Route::get('/artikel', 'CRUDController@index');
Route::get('/artikel/create', 'CRUDController@create');
Route::post('/artikel', 'CRUDController@ProsesCreate');
Route::get('/artikel/{id}', 'CRUDController@detail');
Route::get('/artikel/{id}/edit', 'CRUDController@edit');
Route::put('/artikel/{id}', 'CRUDController@ProsesEdit');
Route::delete('/artikel/{id}', 'CRUDController@ProsesDelete');