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

Route::get('/', function () {
    return view('welcome');
});

//標準表示
Route::get('menu', function (){
    return view('menu');
});
Route::get('manual',function(){
    return view('manual');
});
Route::get('user','UserController@index');
Route::get('software','SoftwareController@index');

//新規作成
Route::get('user/create','UserController@create');
Route::post('user/','UserController@userCreate');
Route::get('software/create','SoftwareController@create');
Route::post('software/','SoftwareController@softwareCreate');

//検索
Route::get('software/softwareSearch','SoftwareController@softwareSearch');

//編集
Route::get('user/{id}/edit','UserController@edit');
Route::put('user/{id}','UserController@update');
Route::get('software/{id}/edit','SoftwareController@edit');
Route::put('software/{id}','SoftwareController@update');

//削除
Route::delete('user/{id}','UserController@destroy');
Route::delete('software/{id}','SoftwareController@destroy');