<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SinhVien;
use DB;
use Excel;
use Hash;
use Illuminate\Support\Facades\Input;

class ExcelController extends Controller
{
    public function getImport(){
    	return view('excel.importSinhVien');
    }
    public function postImport(Request $request){
    	// Excel::load(Input::file('sinhvien'),function($reader){
    	// 	$reader->each(function($sheet){
    	// 		SinhVien::firstOrCreate($sheet->toArray());
    	// 	});
    	// });

        if($request->hasFile('sinhvien')){
            $inputFile = $_FILES['sinhvien']['name'];
            $extension = strtoupper(pathinfo($inputFile, PATHINFO_EXTENSION));
            if($extension == 'XLSX' || $extension == 'CSV'){
                // $mimes = ['application/vnd.ms-excel','text/xlsx','text/csv','text/tsv'];
                // if(in_array($_FILES['sinhvien']['type'],$mimes)){dd('d');
                Excel::load($request->file('sinhvien')->getRealPath(), function ($reader) {
                    foreach ($reader->toArray() as $key => $row) {

                        foreach(SinhVien::select('id')->get() as $sinhvien){
                            if($sinhvien->id === $row['id']){
                                return redirect()->route('DanhSachSinhVien')->with('error', 'Import sinh viên thất bại. Xảy ra lỗi trong quá trình import.');
                                die();
                            }
                        }   

                        $data['id'] = $row['id'];
                        $data['HoTen'] = $row['hoten'];
                        $data['password'] = Hash::make($row['password']);
                        $data['NgaySinh'] = $row['ngaysinh'];
                        $data['GioiTinh'] = $row['gioitinh'];
                        $data['email'] = $row['email'];
                        $data['DiaChi'] = $row['diachi'];
                        $data['type'] = 2;
                        $data['MaLop'] = $row['malop'];

                        if(!empty($data)) {
                            DB::table('sinhvien')->insert($data);
                        }

                    }
                });
            }
            else{
                return redirect()->back()->with('error', 'Bạn cần chọn file có đuôi .csv, .xlsx để import.');
            }
            return redirect()->route('DanhSachSinhVien')->with('success', 'Import sinh viên thành công.');    
        }
        else{
            return redirect()->back()->with('error', 'Bạn chưa chọn file excel cần import.');
        }
    }

    public function getExport(){

        $sinhvien = SinhVien::all();
        Excel::create('ExportSinhVien', function($excel) use($sinhvien){
            $excel->sheet('Sheet 1', function($sheet) use($sinhvien){
                $sheet->fromArray($sinhvien);
            });
        })->export('xlsx');
    }

}
