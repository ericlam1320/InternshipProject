<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use App\LopHoc;

class GiangVien_QLSV_Controller extends Controller
{
    public function getDanhSach(){
        $sinhvien = SinhVien::with('LopHoc')->orderBy('MaLop', 'DESC')->get();
        return view('page.giangvien.sinhvien.danhsach',compact('sinhvien'));
    }

    public function getThem(){
        $lophoc = LopHoc::all();
        return view('page.giangvien.sinhvien.them',compact('lophoc'));
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'masv' => 'required | unique:sinhvien, id',
            'tensv' => 'required | unique:sinhvien, HoTen', 
            'email' => 'required | email | unique:sinhvien, email',
            'diachi' => 'required'
        ],
        [
            'masv.required' => 'Không được để trống Mã SV',
            'masv.unique' => 'Mã sinh viên đã tồn tại',
            'tensv.required' => 'Không được để trống Tên SV',
            'tensv.unique' => 'Tên sinh viên đã tồn tại',
            'email.required' => 'Không được để trống Email',
            'email.email' => 'Sai định dạng email',
            'email.unique' => 'Email sinh viên đã tồn tại',
            'diachi.required' => 'Không được để trống Địa Chỉ'
        ]);

        $sinhvien = new SinhVien;
        $sinhvien->id = $request->masv;
        $sinhvien->HoTen = $request->tensv;
        $sinhvien->NgaySinh = $request->ngaysinh;
        $sinhvien->GioiTinh = $request->gioitinh;
        $sinhvien->MaLop = $request->lophoc;
        $sinhvien->email = $request->email;
        $sinhvien->DiaChi = $request->diachi;

        $sinhvien->save();
        return redirect('giang-vien/quan-ly-sinh-vien/danh-sach')->with('success','Thêm sinh viên thành công.');
    }

    public function getXoa($id){
        $sinhvien = SinhVien::where('id', $id)->delete();
        return redirect('giang-vien/quan-ly-sinh-vien/danh-sach')->with('success','Xoá sinh viên thành công.');
    }

    public function getSua($id){
        $sinhvien = SinhVien::where('id', $id)->first();
        $lophoc = LopHoc::all();
        return view('page.giangvien.sinhvien.sua',compact('lophoc', 'sinhvien'));
    }
    public function postSua($id, Request $request){
        $this->validate($request,[
            'masv' => 'required ',
            'tensv' => 'required ', 
            'email' => 'required | email ',
            'diachi' => 'required'
        ],
        [
            'masv.required' => 'Không được để trống Mã SV',
            'tensv.required' => 'Không được để trống Tên SV',
            'email.required' => 'Không được để trống Email',
            'email.email' => 'Sai định dạng email',
            'diachi.required' => 'Không được để trống Địa Chỉ'
        ]);

        $sinhvien = SinhVien::where('id', $id)->first();
        $sinhvien->id = $request->masv;
        $sinhvien->HoTen = $request->tensv;
        $sinhvien->NgaySinh = $request->ngaysinh;
        $sinhvien->GioiTinh = $request->gioitinh;
        $sinhvien->MaLop = $request->lophoc;
        $sinhvien->email = $request->email;
        $sinhvien->DiaChi = $request->diachi;

        $sinhvien->save();
        return redirect('giang-vien/quan-ly-sinh-vien/danh-sach')->with('success','Thêm sinh viên thành công.');
    }
}
