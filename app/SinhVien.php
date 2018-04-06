<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SinhVien extends Model
{
    protected $table = 'sinhvien';
    public $timestamps = false;


    public function LopHoc(){
    	return $this->belongsTo('App\LopHoc', 'MaLop', 'MaLop');
    }
}
