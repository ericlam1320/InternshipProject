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

Route::get('', function(){ return view('welcome'); });
Route::get('/home', 'HomeController@index')->name('home');



#-------------------------------------------------
#	Phân quyền:	'middleware'=>'can:sinh_vien' : Là sinh viên mới cho vào (type==2)
#-------------------------------------------------
Route::group(['prefix'=>'sinh-vien', 'middleware'=>'can:sinh_vien'], function(){

	Route::get('', 'SinhVienController@getIndex')->name('SinhVien');
	Route::get('thong-bao', 'SinhVienController@getThongBao')->name('ThongBao');
	Route::get('yeu-cau', 'SinhVienController@getYeuCau')->name('YeuCau');

	Route::get('nhom/danh-sach', 'SinhVienController@getDanhSachNhom')->name('DanhSachNhom');
	Route::get('nhom/dang-ky', 'SinhVienController@getDangKyNhom');
	Route::post('nhom/dang-ky', 'SinhVienController@postDangKyNhom');
	Route::get('nhom/chuyen-nhom', 'SinhVienController@getChuyenNhom');
	Route::post('nhom/chuyen-nhom', 'SinhVienController@postChuyenNhom');

	Route::get('thao-luan', 'SinhVienController@getThaoLuan')->name('ThaoLuan');
	Route::get('chi-tiet-thao-luan/{id}', 'SinhVienController@getChiTietThaoLuan')->name('ChiTietThaoLuan');
});



#-------------------------------------------------
#	Phân quyền:	'middleware'=>'can:giang_vien' : Là giảng viên mới cho vào (type==1)
#-------------------------------------------------
Route::group(['prefix'=>'giang-vien', 'middleware'=>'can:giang_vien'], function(){

	Route::get('', 'GiangVienController@getIndex')->name('GiangVien');
	Route::get('thong-bao', 'GiangVienController@getThongBao')->name('ThongBao');
	Route::get('yeu-cau', 'GiangVienController@getYeuCau')->name('YeuCau');

	Route::group(['prefix'=>'quan-ly-sinh-vien'], function(){
		Route::get('', 'GiangVien_QLSV_Controller@getDanhSach');
		Route::get('danh-sach', 'GiangVien_QLSV_Controller@getDanhSach');
		Route::get('them', 'GiangVien_QLSV_Controller@getThem');
		Route::post('them', 'GiangVien_QLSV_Controller@postThem');
		Route::get('xoa/{id}', 'GiangVien_QLSV_Controller@getXoa');
		Route::get('sua/{id}', 'GiangVien_QLSV_Controller@getSua');
		Route::post('sua/{id}', 'GiangVien_QLSV_Controller@postSua');
	});
	Route::group(['prefix'=>'quan-ly-mon-hoc'], function(){
		Route::get('', 'GiangVien_QLMH_Controller@getDanhSach');
		Route::get('danh-sach', 'GiangVien_QLMH_Controller@getDanhSach');
		Route::get('them', 'GiangVien_QLMH_Controller@getThem');
		Route::post('them', 'GiangVien_QLMH_Controller@postThem');
		Route::get('xoa/{id}', 'GiangVien_QLMH_Controller@getXoa');
		Route::get('sua/{id}', 'GiangVien_QLMH_Controller@getSua');
		Route::post('sua/{id}', 'GiangVien_QLMH_Controller@postSua');
	});
	Route::group(['prefix'=>'quan-ly-lop'], function(){
		Route::get('', 'GiangVien_QLLOP_Controller@getDanhSach');
		Route::get('danh-sach', 'GiangVien_QLLOP_Controller@getDanhSach');
		Route::get('them', 'GiangVien_QLLOP_Controller@getThem');
		Route::post('them', 'GiangVien_QLLOP_Controller@postThem');
		Route::get('xoa/{id}', 'GiangVien_QLLOP_Controller@getXoa');
		Route::get('sua/{id}', 'GiangVien_QLLOP_Controller@getSua');
		Route::post('sua/{id}', 'GiangVien_QLLOP_Controller@postSua');
	});

	Route::get('thao-luan', 'GiangVienController@getThaoLuan')->name('ThaoLuan');
	Route::get('chi-tiet-thao-luan/{id}', 'SinhVienController@getChiTietThaoLuan')->name('ChiTietThaoLuan');
});
