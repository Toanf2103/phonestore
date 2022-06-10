<?php

namespace App\Http\Controllers\User;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function back;
use function redirect;
use function view;
use PDF;

class UserController extends Controller
{
    public function quen_mk_view()
    {
    	if(Session('id')==null) {
    		return view('user.pages.quen_mk');
    	} else {
    		return redirect()->intended('/');
    	}
    }

    public function doi_mk_view()
    {
    	if(Session('id')==null) {
    		return redirect()->intended('/login');
    	} else {
    		$result = DB::table('nguoidung')->where('id', Session('id'))->first();
    		return view('user.pages.doi_mk', ['email'=>$result->email]);
    	}
    }

    public function doi_mk(Request $rq)
    {        
        // kiểm tra mật khẩu cũ
        if(Session()->get('id') != null) {
            $result = DB::table('nguoidung')->where('email', $rq->email)->first();
            if(md5($rq->password_old) != $result->password) {
                return view('user.pages.doi_mk', ['error'=>'Mật khẩu cũ không đúng', 'email'=>$rq->email]);
            }
        }
        // kiểm tra mật khẩu mới
        if($rq->password != $rq->password_kt) {
            return view('user.pages.doi_mk', ['error'=>'Mật khẩu xác nhận không đúng', 'email'=>$rq->email]);
        } else {
            $password = md5($rq->password);
            $updated = DB::update('update nguoidung set password = ? where email = ?', [$password, $rq->email]);
            return redirect()->intended('/login');
        }
    }

    public function user_inf()
    {
        if(Session()->get('id') == null)
            return redirect()->intended('/login');
        else {
            $result = DB::table('nguoidung')->where('id', Session()->get('id'))->first();
            return view('user.pages.information', ['user'=>$result]);
        }
    }

    public function user_inf_edid(Request $rq)
    {        
        DB::table('nguoidung')
                ->where('id', Session()->get('id'))
                ->update([  'Ho' => $rq->ho,
                            'Ten' => $rq->ten,
                            'SDT' => $rq->sdt,
                            'GioiTinh' => $rq->gt,
                            'id_tinh' => $rq->id_tinh,
                            'DiaChi' => $rq->dia_chi
                        ]);
        return back()->with('mes', 'Sửa đổi thông tin thành công');
    }

    public function don_mua()
    {        
        if(Session()->get('id') == null)
            return redirect()->intended('/login');
        else {
            $result = DB::table('hoadon')
                        ->where('MaND', Session()->get('id'))
                        ->orderBy('id', 'desc')
                        ->get();
            return view('user.pages.don_mua', ['don_mua'=>$result]);
        }
    }

    public function in_don_hang($id_hd)
    {        
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->in_don_hang_noi_dung($id_hd));
        return $pdf->stream();
    }

    public function in_don_hang_noi_dung($id_hd)
    {
        $nguoi_dung = DB::table('hoadon')->where('id', $id_hd)->first();
        $van_chuyen = $nguoi_dung->id_tinh = 15 ? 20000 : 35000;

        $sp_thanh_toan = DB::table('chitiethoadon')->where('MaHD', $id_hd)->get();
        $san_pham=array();
        $gia = 0;
        $i = 0;
        foreach ($sp_thanh_toan as $value) {
            $sp = DB::table('sanpham')->where('id', $value->MaSP)->first();
            $khuyen_mai = DB::table('khuyenmai')->where('id', $sp->KM_id)->first();
            $sl = $value->SoLuong;
            $gia += $sp->DonGia*$sl;
            

            $san_pham[$i]['ten'] = $sp->TenSP;
            $san_pham[$i]['DonGia'] = $sp->DonGia;
            $san_pham[$i]['so_luong'] = $sl;
            if($khuyen_mai->don_vi == 'VNĐ') {
                $san_pham[$i]['khuyen_mai'] = $khuyen_mai->GiaTriKM*$sl;
            } else {
                $san_pham[$i]['khuyen_mai'] = ($sp->DonGia*$khuyen_mai->GiaTriKM/100)*$sl;
            }
            $i++;    
        }
        return view('user.pages.xuat_hoa_don', ['id_hd'=>$id_hd, 'nguoi_dung'=>$nguoi_dung, 'san_pham'=>$san_pham, 'gia'=>$gia, 'van_chuyen'=>$van_chuyen]);
    }
}
