<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LopHoc extends Model
{
    protected $table = 'lophoc';
    public $timestamps = false;

    public function GiangVien(){
    	return $this->belongsTo('App\GiangVien', 'MaGV', 'id');
    }
}
