<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function getIndex(){
    	return view('page.sinhvien.trangchu');
    }

    public function getThongBao(){
    	return view('page.sinhvien.thongbao');
    }

    public function getYeuCau(){
    	return view('page.sinhvien.yeucau');
    }

    public function getDanhSachNhom(){
        return view('page.sinhvien.danhsachnhom');
    }
    public function getDangKyNhom(){
        return view('page.sinhvien.dangkynhom');
    }
    public function postDangKyNhom(){
        
    }
    public function getChuyenNhom(){
        return view('page.sinhvien.chuyennhom');
    }
    public function postChuyenNhom(){
        
    }

    public function getThaoLuan(){
    	return view('page.sinhvien.thaoluan');
    }

    public function getChiTietThaoLuan(){
        return view('page.sinhvien.chitietthaoluan');
    }
}