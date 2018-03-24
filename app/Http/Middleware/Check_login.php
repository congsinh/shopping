<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Check_login
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
        if(Auth::check()){
            if(Auth::user()->level == 1){
                return $next($request);
            }
            else{
                return redirect('admin/login')->with('thongbao','Bạn không có quyền đăng nhập vào trang này!');
            }
        }else{
            return redirect('admin/login')->with('thongbao','Vui lòng đăng nhập trước khi sử dụng!');
        }

    }
}
