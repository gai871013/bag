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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix'=>'home'],function(){
    // 首页
    Route::get('/', 'HomeController@index')->name('home');
    // 详情页面
    Route::get('detail','HomeController@detail')->name('detail');

});
