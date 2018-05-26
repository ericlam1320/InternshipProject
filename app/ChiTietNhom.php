<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietNhom extends Model
{
    protected $table = 'chitietnhom';
    public $timestamps = false;
    public $primaryKey = 'MaNhom';
    public $incrementing = false;

    public function MonHoc(){
    	return $this->hasMany('App\MonHoc', 'MaMon', 'MaMon');
    }
}
