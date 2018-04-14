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

// trang chủ
Route::get('trangchu','PagesController@getTrangchu');
Route::get('gioithieu','PagesController@gioithieu');
Route::get('lienhe','PagesController@lienhe');
// đăng nhập
Route::get('dangnhap','PagesController@getDangnhap');
Route::post('dangnhap','PagesController@postDangnhap');

//đăng xuất
Route::get('dangxuat','PagesController@dangxuat');

//dang ký
Route::get('dangky','PagesController@getdangky');
Route::post('dangky','PagesController@postdangky');

Route::get('dangkyntd',[
		'as'=>'dangkyntd',
		'uses'=>'NhaTuyenDungController@getdangkyntd'
]);
Route::post('dangkyntd',[
		'as'=>'dangkyntd',
		'uses'=>'NhaTuyenDungController@postdangkyntd'
]);
//Route::get('dangkyhoso','PagesController@getdangkyhoso');
// quản lí thông tin cá nhân
Route::get('hosocanhan','PagesController@getHosocanhan');
Route::post('hosocanhan','PagesController@postHosocanhan');

// hồ sơ -cv
Route::get('hosoxinviec/{id}','PagesController@getHosoxinviec');
Route::post('suahoso/{id}','PagesController@suaHoso');

Route::get('test','PagesController@getTest');
// đăng nhập
Route::get('admin/dangnhap','UserController@getdangnhapAdmin');
Route::post('admin/dangnhap','UserController@postdangnhapAdmin');

// logout
Route::get('admin/logout','UserController@getDangXuatAdmin');


// tạo route cho admin
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'user'],function(){
		Route::get('danhsach','UserController@getdanhsach');
		Route::get('sua/{id}','UserController@getSua');
		Route::post('sua/{id}','UserController@postSua');
		Route::get('them','UserController@getThem');
		Route::post('them',['as' => 'them','uses' => 'UserController@postThem']);
		Route::get('xoa/{id}','UserController@getXoa');
	});
	Route::group(['prefix'=>'nhatuyendung'],function(){
		Route::get('danhsach','RecruitersController@getdanhsach');
		Route::get('sua/{id}','RecruitersController@getsua');
		Route::post('sua/{id}','RecruitersController@postSua');
		Route::get('them','RecruitersController@getThem');
		Route::post('them',['as' => 'them','uses' => 'RecruitersController@postThem']);
		Route::get('xoa/{id}','RecruitersController@getXoa');
	});
});


//Nha tuyen dung
Route::get('page_recruiter',[
	'as'	=>'page_recruiter',
	'uses'	=>'NhaTuyenDungController@page_recruiter'
]);

Route::group(['prefix'=>'Recruiter'],function(){

	Route::get('ListPost',array(
		'as'=>'ListPost',
		'uses'=>'NhaTuyenDungController@ListPost'
	));	

	Route::get('getAddPost',array(
		'as'=>'getAddPost',
		'uses'=>'NhaTuyenDungController@getAddPost'
	));	
	Route::post('AddPost',array(
		'as'=>'AddPost',
		'uses'=>'NhaTuyenDungController@AddPost'
	));	

	// Route::get('them','NhaTuyenDungController@getThem');
	// Route::post('them','NhaTuyenDungController@postThem');

	// Route::get('sua/{id}','NhaTuyenDungController@getSua');
	// Route::post('sua/{id}','NhaTuyenDungController@postSua');
	
	// Route::get('xoa/{id}','NhaTuyenDungController@getXoa');

});
