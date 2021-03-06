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


Route::get('/hello','DataController@index');
Route::get('/welcome','DataController@welcome');
Route::get('/incorrect_password','AccountController@incorrectpassword');
Route::get('/home','AccountController@home');
Route::get('/password','BackendController@password');
Route::get('/logout','BackendController@logout');
Route::get('/account','FrontendController@account');
Route::get('/balance','FrontendController@balance');
Route::get('/id','ToiletController@id');
Route::get('/login','ToiletController@login');
Route::get('/country/{id}','NepalController@nepal');
Route::get('/account','AccountController@index');
Route::post('/account','AccountController@store');
Route::get('/account/delete/{id}','AccountController@delete');
Route::get('/account/edit/{id}','AccountController@edit');
Route::post('/account/edit/{id}','AccountController@update');
Route::get('/transactiondetail','TransactionController@transaction');
Route::post('/transactiondetail','TransactionController@insert');
Route::get('/transactiondetail/delete/{id}','TransactionController@remove');
Route::get('/transactiondetail/edit/{id}','TransactionController@rewrite');
Route::post('/transactiondetail/edit/{id}','TransactionController@load');



    

