<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;

class LoginGiangVienMiddleware
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
        $auth = Auth::guard('giangvien');
        if($auth->check()){ 
            $giangvien = $auth->user(); //lấy user đang check ra
            if($giangvien->type == 1)  //quyen = 2
                return $next($request);
            else 
              return redirect('login');

        }
        else{ 
            return redirect('login');
        }

    }
}
