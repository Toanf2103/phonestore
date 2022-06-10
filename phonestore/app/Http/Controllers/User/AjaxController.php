<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use function redirect;
use function view;

class AjaxController extends Controller
{
    public function add_cart($id_nd, $id_product, $so_luong) {   	
        $list = DB::table('giohang')->where('id_nd', $id_nd)->where('id_sp', $id_product)->first();
        if($list) {
            $sl = $list->so_luong + $so_luong;
            $updated = DB::update('update giohang set so_luong = '.$sl.' where id_nd = ? and id_sp = ?', [$id_nd, $id_product]);
        } else {
            DB::insert('insert into giohang (id_nd, id_sp, so_luong) values (?, ?, ?)', [$id_nd, $id_product, $so_luong]);
        }
    }

    public function up_sl($sl, $id_sp, $don_gia)
    {
        $updated = DB::update('update giohang set so_luong = '.$sl.' where id_nd = ? and id_sp = ?', [Session()->get('id'), $id_sp]);
        echo number_format($sl*$don_gia, "0", "0", ".").' VNĐ';
    }

    public function xoa_sp($id_nd, $id_sp)
    {
    	DB::delete( 'delete from giohang where id_nd = ? and id_sp = ?' ,[$id_nd, $id_sp]);
        $result = DB::table('giohang')
                    ->join('sanpham', 'sanpham.id', '=', 'giohang.id_sp')
                    ->where('id_nd', $id_nd)
                    ->get();
        return view('user.ajax.cart', ['list_cart' => $result]);
    }

    public function kt_email($email)
    {
        $result = DB::table('nguoidung')->where('email', $email)->first();
        if(!$result) {
            echo 'sai';
        } else {
            $rand = 'ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz0123456789';
            $maXN = substr(str_shuffle($rand), 0, 5);
            Session::put('ma_xn', $maXN);
            $to      = $email;
            $subject = 'TNT SHOP - ĐỪNG QUÊN MẬT KHẨU NỮA BẠN NHÉ!';
            $message = 'Mã xác nhận của bạn là: '.$maXN;
            $headers = 'From: emailtudonggui@gmail.com'. phpversion();
            mail($to, $subject, $message, $headers);
        }
    }

    public function kt_ma_xn($ma_xn, $email)
    {
        if($ma_xn != Session()->get('ma_xn')) {
            echo 'sai';
        } else {
            return view('user.ajax.doi_mk', ['email'=>$email]);
        }
    }

    public function phan_trang($i, $mes)
    {
        $sp_khuyen_mai = DB::select('SELECT sanpham.id, TenSP, DonGia, HinhAnh1, KM_id, TenDM, TenLSP
                                    FROM khuyenmai, sanpham, danhmuc, loaisanpham
                                    where sanpham.KM_id=khuyenmai.id and sanpham.DM_id=danhmuc.id and sanpham.TH_id=loaisanpham.id
                                    and khuyenmai.id!=1
                                    and ((CURDATE() BETWEEN NgayBD and NgayKT) or (NgayKT is NULL)) 
                                    and sanpham.TrangThai != 0
                                    ORDER by DonGia desc');
        $trang_max = count($sp_khuyen_mai) > ($i-1)*9+9 ? ($i-1)*9+9 : count($sp_khuyen_mai);
        return view('user.ajax.sp_khuyen_mai', ['sp_khuyen_mai'=>$sp_khuyen_mai, 'trang'=>($i-1)*9, 'trang_max'=>$trang_max]);
    }

    public function bo_loc($sx, $gia, $ram, $rom, $tu_khoa)
    {
        $result = DB::table('sanpham')
                    ->where('TenSP', 'like', '%'.$tu_khoa.'%')
                    ->where('TrangThai', '!=', 0);
        if($sx!=0) {
            switch ($sx) {
                case 'giam':                
                    $result = $result->orderBy('DonGia', 'desc');
                    break;
                case 'tang':
                    $result = $result->orderBy('DonGia', 'asc');
                    break;           
                default:                    
                    break;
            }
        }
        if($gia!=0) {
            switch ($gia) {
                case '1':
                    $result = $result->whereBetween('DonGia', [0, 2000000]);
                    break;
                case '2':
                    $result = $result->whereBetween('DonGia', [2000000, 4000000]);
                    break;
                case '3':
                    $result = $result->whereBetween('DonGia', [4000000, 7000000]);
                    break;
                case '4':
                    $result = $result->whereBetween('DonGia', [7000000, 13000000]);
                    break;
                case '5':
                    $result = $result->whereBetween('DonGia', [13000000, 20000000]);
                    break;
                case '6':
                    $result = $result->where('DonGia', '>=', 20000000);
                    break;         
                default:                    
                    break;
            }
        }
        if($ram!=0) {
            $result = $result->where('Ram', '=', $ram);
        }
        if($rom!=0) {
            $result = $result->where('Rom', '=', $rom);
        }
        $result = $result->get();

        return view('user.ajax.search', ['sp_tim_kiem'=>$result]);
    }

    public function danh_gia(Request $rq)
    {
        $id_nd = $rq->id_nd;
        $id_sp = $rq->id_sp;
        $danh_gia = $rq->danh_gia;
        DB::insert('insert into danh_gia_sp(id_nd, id_sp, noi_dung) values (?, ?, ?)', [$id_nd, $id_sp, $danh_gia]);

        $danh_gia = DB::table('danh_gia_sp')
                    ->join('nguoidung', 'danh_gia_sp.id_nd', 'nguoidung.id')
                    ->where('id_sp', $id_sp)
                    ->whereNull('id_tra_loi')
                    ->orderBy('id_danh_gia', 'desc')
                    ->get();
        return view('user.ajax.danh_gia', ['danh_gia'=>$danh_gia]);
    }

    public function tl_danh_gia(Request $rq)
    {
        $id_nd = $rq->id_nd;
        $id_sp = $rq->id_sp;
        $id_danh_gia = $rq->id_danh_gia;
        $danh_gia = $rq->danh_gia;
        DB::insert('insert into danh_gia_sp(id_nd, id_sp, noi_dung, id_tra_loi) values (?, ?, ?, ?)', [$id_nd, $id_sp, $danh_gia, $id_danh_gia]);

        $danh_gia = DB::table('danh_gia_sp')
                    ->join('nguoidung', 'danh_gia_sp.id_nd', 'nguoidung.id')
                    ->where('id_sp', $id_sp)
                    ->whereNull('id_tra_loi')
                    ->orderBy('id_danh_gia', 'desc')
                    ->get();
        return view('user.ajax.danh_gia', ['danh_gia'=>$danh_gia]);
    }
}