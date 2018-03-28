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

Route::group(['prefix'=>'sinh-vien'], function(){
	Route::get('', 'SinhVienController@getIndex');
	Route::get('thong-bao', 'SinhVienController@getThongBao')->name('ThongBao');
	Route::get('yeu-cau', 'SinhVienController@getYeuCau')->name('YeuCau');
	Route::get('thao-luan', 'SinhVienController@getThaoLuan')->name('ThaoLuan');
});

Route::group(['prefix'=>'giang-vien'], function(){
	Route::get('', 'GiangVienController@getIndex');
});
