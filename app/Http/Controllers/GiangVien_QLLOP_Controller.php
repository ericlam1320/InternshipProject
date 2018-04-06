<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LopHoc;
use App\GiangVien;


class GiangVien_QLLop_Controller extends Controller
{
    public function getDanhSach(){
        $lophoc = LopHoc::with('GiangVien')->orderBy('MaLop', 'DESC')->get();
        return view('page.giangvien.lop.danhsach' , compact('lophoc'));
    }

    public function getThem(){
        $giangvien = GiangVien::all();
        return view('page.giangvien.lop.them', compact('giangvien'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'malop'=> 'required | unique:lophoc,MaLop',
            'tenlop'=>'required | unique:lophoc,TenLop',
            'soluongsv'=>'required|numeric'
        ],
        [
            'malop.unique'=>'Mã lớp đã tồn tại',
            'malop.required'=>'Mã Lớp lớp không được để trống',
            'tenlop.required'=>'Tên lớp không được để trống',
            'tenlop.unique'=>'Tên lớp đã tồn tại',
            'soluongsv.required'=>'Số lượng sinh viên không được để trống',
            'soluongsv.numeric'=>'Số lượng sinh viên phải là ký tự số'
            
        ]);

        $lop = new LopHoc;
        $lop->MaLop = $request->malop;
        $lop->TenLop = $request->tenlop;
        $lop->SoLuongSV = $request->soluongsv;
        $lop->MaGV = $request->giangvien;
        $lop->save();

        return redirect('giang-vien/quan-ly-lop/danh-sach')->with('success','Thêm lớp học thành công.');
    }

    public function getXoa($id){
        $lop = LopHoc::where('MaLop', $id)->delete();
        return redirect('giang-vien/quan-ly-lop/danh-sach')->with('success','Xoá lớp học thành công.');
    }

    public function getSua($id){
        $lop = LopHoc::where('MaLop', $id)->first();
        $giangvien = GiangVien::all();
        return view('page.giangvien.lop.sua', compact('lop', 'giangvien'));
    }
    public function postSua($id, Request $request){
        $this->validate($request,[
            'malop'=> 'required',
            'tenlop'=>'required',
            'soluongsv'=>'required|numeric'
        ],
        [
            'malop.required'=>'Mã lớp không được để trống',
            'tenlop.required'=>'Tên lớp không được để trống',
            'soluongsv.required'=>'Số lượng sinh viên không được để trống',
            'soluongsv.numeric'=>'Số lượng sinh viên phải là ký tự số'
            
        ]);

        $lop = LopHoc::where('MaLop', $id)->first();
        $lop->MaLop = $request->malop;
        $lop->TenLop = $request->tenlop;
        $lop->SoLuongSV = $request->soluongsv;
        $lop->MaGV = $request->giangvien;
        $lop->save();

        return redirect('giang-vien/quan-ly-lop/danh-sach')->with('success','Cập nhật lớp học thành công.');
    }
}
