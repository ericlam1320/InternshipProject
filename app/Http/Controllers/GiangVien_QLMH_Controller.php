<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MonHoc;
use App\ChiTietNhom;
class GiangVien_QLMH_Controller extends Controller
{
   public function getDanhSach(){
        $monhoc = MonHoc::all();
        return view('page.giangvien.monhoc.danhsach', compact('monhoc'));
    }

    public function getThem(){
        return view('page.giangvien.monhoc.them');
    }
    public function postThem(Request $request){
        $this->validate($request,[
            'mamon'=>'required | unique:monhoc,MaMon',
            'tenmon'=>'required | unique:monhoc,TenMon',
            'hocky'=>'required | numeric',
            'sotinchi'=>'required | numeric'
        ],
        [
            'mamon.required' => 'Không được để trống Mã môn học ',
            'mamon.unique' => 'Mã môn học đã tồn tại',
            'tenmon.required' => 'Không được để trống Tên môn học',
            'tenmon.unique' => 'Tên môn học đã tồn tại',
            'hocky.required' => 'Không được để trống Học kỳ',
            'hocky.numeric' => 'Học kỳ phải là ký tự số',
            'sotinchi.required' => 'Không được để trống Số tín chỉ',
            'sotinchi.numeric' => 'Số tín chỉ phải là ký tự số'
        ]);

        $monhoc = new MonHoc;
        $monhoc->MaMon = $request->mamon;
        $monhoc->TenMon = $request->tenmon;
        $monhoc->HocKy = $request->hocky;
        $monhoc->SoTinChi = $request->sotinchi;

        $monhoc->save();
        return redirect('giang-vien/quan-ly-mon-hoc/danh-sach')->with('success','Thêm môn học thành công.');
    }

    public function getXoa($id){
        $mon = MonHoc::where('MaMon', $id)->first();
        $mon_id = $mon->MaMon; 

        $nhom = ChiTietNhom::where('MaMon', $id)->first();

        if($nhom == null){
            $monhoc = MonHoc::where('MaMon', $id)->delete();        
            return redirect('giang-vien/quan-ly-mon-hoc/danh-sach')->with('success','Xoá môn học thành công.');
        }
            

        else {
            $nhom_id = $nhom->MaMon;
            if($mon_id == $nhom_id){
                return redirect('giang-vien/quan-ly-mon-hoc/danh-sach')->with('error','Không thể xoá môn học');
            }
        }

        

        
    }

    public function getSua($id){
        $monhoc = MonHoc::where('MaMon', $id)->first();
        return view('page.giangvien.monhoc.sua', compact('monhoc'));
    }
    public function postSua($id, Request $request){
        $this->validate($request,[
            'mamon'=>'required',
            'tenmon'=>'required',
            'hocky'=>'required | numeric',
            'sotinchi'=>'required | numeric'
        ],
        [
            'mamon.required' => 'Không được để trống Mã môn học ',
            'tenmon.required' => 'Không được để trống Tên môn học',
            'hocky.required' => 'Không được để trống Học kỳ',
            'hocky.numeric' => 'Học kỳ phải là ký tự số',
            'sotinchi.required' => 'Không được để trống Số tín chỉ',
            'sotinchi.numeric' => 'Số tín chỉ phải là ký tự số'
        ]);

        $monhoc = MonHoc::where('MaMon', $id)->first();
        $monhoc->MaMon = $request->mamon;
        $monhoc->TenMon = $request->tenmon;
        $monhoc->HocKy = $request->hocky;
        $monhoc->SoTinChi = $request->sotinchi;

        $monhoc->save();
        return redirect('giang-vien/quan-ly-mon-hoc/danh-sach')->with('success','Cập nhật môn học thành công.');
    }
}
