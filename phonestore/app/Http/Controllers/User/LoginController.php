<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use function back;
use function redirect;
use function view;

class LoginController extends Controller
{
    public function user_login_view()
    {
        if(Session()->get('link') == null)
            Session::put('link', url()->previous());
        if(Session()->get('id') == null)
            return view('user.pages.login');
        else
            return redirect()->intended('/');
    }

    public function user_login(Request $request)
    {
        $email = $request->email;
        $password = md5($request->password);
        $result = DB::table('nguoidung')
                    ->where('email', $email)
                    ->first();
        if(Session()->get('link') == null)
            Session::put('link', $request->link);
        if(!$result) {
            return view('user.pages.login', ['error'=>'Tên tài khoản không tồn tại']);
        } else if($result->TrangThai == 0) {
            return view('user.pages.login', ['error'=>'Tài khoản mày bị khóa rồi']);
        } else if($result->password != $password) {
            return view('user.pages.login', ['error'=>'Mật khẩu sai', 'email'=>$email]);
        } else {
            Session::put('id', $result->id);
            Session::put('Ho', $result->Ho);
            Session::put('Ten', $result->Ten);
            Session::put('Quyen_id', $result->Quyen_id);
            return redirect()->intended($request->link);
        }
    }

    public function user_logout()
    {
        Auth::logout();
        Session()->forget('id');
        Session()->forget('Ho');
        Session()->forget('Ten');
        Session()->forget('Quyen_id');
        Session()->forget('link');
        return Redirect::to(url()->previous());
    }

    public function user_dang_ki_view()
    {
        if(Session()->get('id') != null)
            return redirect()->intended('/');
        else
            return view('user.pages.dang_ki');
    }

    public function user_dang_ki(Request $request)
    {
        $result = DB::table('nguoidung')->where('email', $request->email)->first();
        if($result) {
            return view('user.pages.dang_ki', ['error'=>'Email đã tồn tại', 'ho'=>$request->ho, 'ten'=>$request->ten]);
        } else if($request->password != $request->password_kt) {
            return view('user.pages.dang_ki', ['error'=>'Mật khẩu xác nhận không đúng', 'ho'=>$request->ho, 'ten'=>$request->ten, 'email'=>$request->email]);
        } else if($request->ma_capcha != $request->ma_capcha_nhap) {
            return view('user.pages.dang_ki', ['error'=>'Sai mã capcha', 'ho'=>$request->ho, 'ten'=>$request->ten, 'email'=>$request->email]);
        } else {
            $data = $request->all();
            $new = new User();
            $new->Ho = $request->Ho;
            $new->Ten = $request->Ten;
            $new->GioiTinh = $request->GioiTinh;
            $new->SDT = $request->SDT;
            $new->email = $request->email;
            $new->id_tinh = $request->id_tinh;
            $new->password = md5($request->password);
            $new->Quyen_id = 1;
            $new->TrangThai = 1;
            $new->save();
            return redirect()->route("login_view")->with('add', 'Đăng kí thành công');
        }
    }
}
