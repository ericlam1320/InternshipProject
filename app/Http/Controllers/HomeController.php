<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Hash;
use App\SinhVien;
use App\GiangVien;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin(){
        return view('auth.login');
    }
    public function postLogin(Request $request){

        $this->validate($request, [
            'username' => 'required|max:255|min:4',
            'password' => 'required|min:5'
        ], [
            'username.required' => 'Bạn chưa nhập tên.',
            'username.max' => 'Tên không quá 255 kí tự.',
            'username.min' => 'Tên đăng nhập quá ngắn.',
            'password.required' => 'Bạn cần nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải trên 5 kí tự',
        ]);

        $loginSinhVien = array(
            'id' => $request->username,
            'password' => $request->password,
            'type' => 2
        );
        $loginGiangVien = array(
            'id' => $request->username,
            'password' => $request->password,
            'type' => 1
        );
        if(Auth::guard('sinhvien')->attempt($loginSinhVien)){
            return redirect()->route('SinhVien');
        }
        elseif(Auth::guard('giangvien')->attempt($loginGiangVien)){
            return redirect()->route('GiangVien');
        }
        else{
            return redirect()->back()->with('Loi', 'Tên đăng nhập hoặc mật khẩu không đúng.');
        }
    }

    public function getRegister(){
        return view('auth.register');
    }
    public function postRegister(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:giangvien',
            'password' => 'required|min:5',
            'password_confirmation' => 'required|same:password'
        ], [
            'name.required' => 'Bạn cần nhập tên.',
            'name.max' => 'Ten không được quá 255 kí tự.',
            'email.required' => 'Bạn chưa nhập tên.',
            'email.email' => 'Email không đúng định dạng.',
            'email.max' => 'Tên không quá 255 kí tự.',
            'email.unique' => 'Email đã có người đăng ký.',
            'password.required' => 'Bạn cần nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải trên 5 kí tự',
            'password_confirmation.required' => 'Bạn chưa nhâp mật khẩu.',
            'password_confirmation.same' => 'Mật khẩu nhập lại chưa đúng.'
        ]);

        $user = new SinhVien;
        $user->id = 'SV002';
        $user->HoTen = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->type = 2;
        $user->save();

        return redirect()->back()->with('Success', 'Đã đăng ký.');
    }

    public function getLogout(){
        Auth::guard('sinhvien')->logout();
        Auth::guard('giangvien')->logout();
        return view('welcome');
    }

    public function index()
    {
        if(Auth::user()->type === 2){
            return redirect('sinh-vien');
        }
        else{
             return redirect('giang-vien');
        }
    }
}
