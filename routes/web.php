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

/* Route::get('/', function () {
    return view('welcome');
}); */



Route::get('/',['uses'=>'PasteController@index','as'=>'index']);
Route::match(['get','post'],'create/{id}',['uses'=>'PasteController@create','as'=>'create']);
Route::match(['get','post'],'store',['uses'=>'PasteController@store','as'=>'store']);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('priv',['uses'=>'PrivateController@index', 'middleware'=> 'auth', 'as'=>'priv']);
