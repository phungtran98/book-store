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


// route::get('/dangnhap', 'UserController@getLogin');
// route::post('/checklogin', 'UserController@postLogin')->name('postLogin');


Route::get('/dangnhap','UserController@getLogin')->name('dangnhap');

route::post('/checklogin', 'UserController@postLogin')->name('postLogin');

Route::get('/dangky','UserController@getRegister')->name('dangky'); 
Route::get('/dangxuat','UserController@logout')->name('dangxuat'); 


Route::group(['prefix' => 'admin'], function () {
    
    Route::get('/dashboard','Admin\AdminController@index')->name('dashboard');

    //loại sách
    Route::group(['prefix' => 'loaisach'], function () {
        Route::get('/index','Admin\LoaisachController@index')->name('loaisach.index');
        Route::get('/them','Admin\LoaisachController@form')->name('loaisach.form');
        Route::post('/luu','Admin\LoaisachController@store')->name('loaisach.submit');
        Route::get('/sua/{loaisach_id}','Admin\LoaisachController@formupdate')->name('loaisach.id');
        Route::post('/sua_id/{loaisach_id}','Admin\LoaisachController@update')->name('loaisach.capnhat');
        Route::get('/delete/{loaisach_id}','Admin\LoaisachController@destroy')->name('loaisach.delete');
    });

    //tác giả
    Route::group(['prefix' => 'tacgia'], function () {
        Route::get('/index','Admin\TacgiaController@index')->name('tacgia.index');
        Route::get('/them','Admin\TacgiaController@form')->name('tacgia.form');
        Route::post('/luu','Admin\TacgiaController@store')->name('tacgia.submit');
        Route::get('/sua/{tacgia_id}','Admin\TacgiaController@formupdate')->name('tacgia.id');
        Route::post('/sua_id/{tacgia_id}','Admin\TacgiaController@update')->name('tacgia.capnhat');
        Route::get('/delete/{tacgia_id}','Admin\TacgiaController@destroy')->name('tacgia.delete');
    });

    //nhà xuất bản
    Route::group(['prefix' => 'nhaxb'], function () {
        Route::get('/index','Admin\NhaxuatbanController@index')->name('nhaxb.index');
        Route::get('/them','Admin\NhaxuatbanController@form')->name('nhaxb.form');
        Route::post('/luu','Admin\NhaxuatbanController@store')->name('nhaxb.submit');
        Route::get('/sua/{nhaxb_id}','Admin\NhaxuatbanController@formupdate')->name('nhaxb.id');
        Route::post('/sua_id/{nhaxb_id}','Admin\NhaxuatbanController@update')->name('nhaxb.capnhat');
        Route::get('/delete/{nhaxb_id}','Admin\NhaxuatbanController@destroy')->name('nhaxb.delete');
    });

    //khách hàng
    Route::group(['prefix' => 'khachhang'], function () {
        Route::get('/index','Admin\KhachHangController@index')->name('khachhang.index');
        // Route::get('/them','Admin\KhachHangController@form')->name('khachhang.form');
        Route::post('/luu','Admin\KhachHangController@store')->name('khachhang.submit');
        Route::get('/sua/{khachhang_id}','Admin\KhachHangController@formupdate')->name('khachhang.id');
        Route::post('/sua_id/{khachhang_id}','Admin\KhachHangController@update')->name('khachhang.capnhat');
        Route::get('/delete/{khachhang_id}','Admin\KhachHangController@destroy')->name('khachhang.delete');
    });

    //tài khoản
    Route::group(['prefix' => 'taikhoan'], function () {
        Route::get('/index','Admin\TaiKhoanController@index')->name('taikhoan.index');
        Route::get('/them','Admin\TaiKhoanController@form')->name('taikhoan.form');
        Route::post('/luu','Admin\TaiKhoanController@store')->name('taikhoan.submit');
        Route::get('/sua/{taikhoan_id}','Admin\TaiKhoanController@formupdate')->name('taikhoan.id');
        Route::post('/sua_id/{taikhoan_id}','Admin\TaiKhoanController@update')->name('taikhoan.capnhat');
        Route::get('/delete/{taikhoan_id}','Admin\TaiKhoanController@destroy')->name('taikhoan.delete');
    });


    //sách
    Route::group(['prefix' => 'sach'], function () {

        Route::get('/index','Admin\SachController@index')->name('sach.index');

        Route::post('/luu','Admin\SachController@store')->name('sach.submit');

        Route::get('/trangthai/{id}/{st}','Admin\SachController@updatestatus')->name('sach.trangthai');
        Route::get('/capnhat/{id}','Admin\SachController@getform')->name('sach.capnhat');
        Route::post('/capnhat/luu/{id}','Admin\SachController@update')->name('sach.capnhat.submit');
        Route::get('/xoa/{id}','Admin\SachController@destroy')->name('sach.xoa');

    });

});

//trang người dùng
Route::group(['prefix' => 'user'], function () {

    //trang chủ
    Route::get('/','Users\HomeController@index')->name('trangchu');

    //chi tiết sách
    Route::get('/chi-tiet/{id}','Users\ChiTietSachController@index')->name('sach.chitiet');
    Route::get('/binhluan','Users\ChiTietSachController@ajaxcomment')->name('sach.ajaxcomment');
    Route::get('/binhluan/noidung','Users\ChiTietSachController@ajaxgetcomment')->name('sach.getcomment');

    //hiện thị theo loại sách
    Route::get('/sach/{id}','Users\SachController@index')->name('sach.theoloai');
    //hiện thị theo tac gia
    Route::get('/tacgia/{id}','Users\SachController@Author')->name('tacgia.theoloai');
    //hiện thị theo nbx
    Route::get('/nxb/{id}','Users\SachController@nxb')->name('nxb.theoloai');
    
    //tìm kiếm sách
    Route::get('/timkiem','Users\SachController@ajaxsearch')->name('sach.timkiemajax');
    Route::post('/timkiem','Users\SachController@search')->name('sach.timkiem');

    //Giỏ hàng
    Route::get('/giohang','Users\GioHangController@index')->name('sach.giohang');
    Route::post('/giohang/thongtin','Users\GioHangController@getcart')->name('giohang.thongtin');
    Route::get('/giohang/xoa/{id}','Users\GioHangController@destroy')->name('giohang.xoa');
    Route::post('/giohang/capnhat','Users\GioHangController@update')->name('giohang.capnhat');

    //Thanh toán VNPAY
    Route::post('/thanhtoan','Users\PaymentController@create')->name('giohang.thanhtoan');
    Route::get('/return-vnpay', 'Users\PaymentController@return');


});

