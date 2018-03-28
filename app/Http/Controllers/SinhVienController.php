<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SinhVienController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu-sinhvien');
    }

    public function getThongBao(){
    	return view('page.thongbao');
    }

    public function getYeuCau(){
    	return view('page.yeucau');
    }

    public function getThaoLuan(){
    	return view('page.thaoluan');
    }
}