<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiangVien_QLSV_Controller extends Controller
{
    public function getDanhSach(){
        return view('page.giangvien.sinhvien.danhsach');
    }

    public function getThem(){

    }
    public function postThem(Request $request){

    }

    public function getXoa($id){
        
    }

    public function getSua($id){

    }
    public function postSua($id, Request $request){
        
    }
}
