<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class LoginSinhVienMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth = Auth::guard('sinhvien');
        if($auth->check()){ 
            $sinhvien = $auth->user(); //lấy user đang check ra
            if($sinhvien->type == 2)  //quyen = 2
                return $next($request);
            else 
              return redirect('login');

        }
        else{
            return redirect('login');
        }

    }
}
