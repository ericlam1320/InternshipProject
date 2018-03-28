<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiangVienController extends Controller
{
    public function getIndex(){
    	return view('page.trangchu-giangvien');
    }
}
