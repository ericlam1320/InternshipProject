<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class GiangVien extends Authenticatable
{
	use Notifiable;
	protected $guard = 'giangvien';
	protected $table = 'giangvien';
	public $incrementing = false;
	
	public $timestamps = false;

	public function LopHoc(){
    	return $this->hasMany('App\LopHoc', 'MaGV', 'id');
    }
}
