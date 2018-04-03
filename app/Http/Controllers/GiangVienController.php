<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    public function getIndex(){
    	return view('page.giangvien.trangchu');
    }

    public function getThongBao(){
    	return view('page.giangvien.thongbao');
    }

    public function getYeuCau(){
    	return view('page.giangvien.yeucau');
    }

    public function getThaoLuan(){
    	return view('page.giangvien.thaoluan');
    }

    public function getChiTietThaoLuan(){
        return view('page.giangvien.chitietthaoluan');
    }
}
