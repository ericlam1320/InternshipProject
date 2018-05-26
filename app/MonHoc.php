<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonHoc extends Model
{
    protected $table = 'monhoc';
    public $timestamps = false;
    public $primaryKey = 'MaMon';
    public $incrementing = false;

    public function ChiTietNhom(){
    	return $this->belongsTo('App\ChiTietNhom', 'MaMon', 'MaMon');
    }
}
