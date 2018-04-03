<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GiangVien extends Model
{
    protected $table = 'giangvien';
    public $timestamps = false;

    public function LopHoc(){
    	return $this->hasMany('App\LopHoc', 'MaGV', 'id');
    }
}
