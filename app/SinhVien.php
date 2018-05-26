<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SinhVien extends Authenticatable
{
	use Notifiable;
	protected $guard = 'sinhvien';
	protected $table = 'sinhvien';
	public $incrementing = false;
	protected $fillable = [
        'id', 'HoTen', 'password','NgaySinh', 'GioiTinh', 'email', 'DiaChi', 'type', 'MaLop'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
	public $timestamps = false;
	public function LopHoc(){
    	return $this->belongsTo('App\LopHoc', 'MaLop', 'MaLop');
    }
}
