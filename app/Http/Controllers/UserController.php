<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{

    public function getLogin(){
        if (Auth::viaRemember()) {
            return redirect('admin/dashboard');
        }
        else{
            return view('admin.login');
        }
    }

    public function postLogin(Request $request){
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],$remember)){
            return redirect('admin/dashboard');
        }
        else{
            return redirect('admin/login')->with('errors','Đăng nhập không thành công !');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('admin/login')->with('success','Đăng xuất thành công!');
    }
    public function dashboard(){
        return view('admin.dashboard');
    }
}
