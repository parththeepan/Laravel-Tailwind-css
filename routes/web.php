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


//Add form
Route::get('/create','CustomerController@showForm');
Route::post('/formstore','CustomerController@store')->name('create_form.store');

//view form
Route::get('/','CustomerController@viewUsers');

//update form
Route::get('/updateform/{id}','CustomerController@ShowUpdateForm');
Route::post('/update','CustomerController@update');

//delete one data
Route::delete('/delete/{id}','CustomerController@delete');

//delete selected data
Route::delete('/deleteSelected','CustomerController@deleteSelected')->name('view_form.deleteSelected');