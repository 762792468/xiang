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

Route::get('/admin', 'UserController@info');
Route::get('/', function (){
    return view('welcome');
});
//Route::get('/admin/user', 'UserController@index');
Route::get('/user/add', 'UserController@add');
Route::Post('/user/store', 'UserController@store')->middleware('token');
Route::get('/user/index', 'UserController@index');
