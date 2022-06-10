<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use function back;
use function redirect;
use function view;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.pages.login');
    }
//    public function login(Request $request)
//    {
//        $credentials = $request->only('email', 'password');
//        if (Auth::attempt($credentials)) {
//            return redirect()->intended('admin/dashboard');
//        } else {
//            Session::put('message','Mật khẩu hoặc email không đúng!');
//            return back();
//        }
//    }
    public function login(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('nguoidung')->where('email', $email)->where('password', $password)->first();
        if ($result) {
            if ($result->Quyen_id != 1) {
                Session::put('id', $result->id);
                Session::put('Ho', $result->Ho);
                Session::put('Ten', $result->Ten);
                Session::put('Quyen_id', $result->Quyen_id);
                return redirect()->intended('admin/dashboard');
            } else {
                Session::put('message', 'Mật khẩu hoặc email không đúng!');
                return back();
            }
        } else {
            Session::put('message', 'Mật khẩu hoặc email không đúng!');
            return back();
        }
    }

    public function logout()
    {
//        Auth::logout();
        Session::flush();
        return Redirect::to('admin/login');
    }
}
