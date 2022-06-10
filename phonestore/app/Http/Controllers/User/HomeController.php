<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use function back;
use function redirect;
use function view;

session_start();

class HomeController extends Controller
{
    public function index()
    {
        $sp_noi_bat = DB::select('SELECT sanpham.id, TenSP, DonGia, HinhAnh1, KM_id, TenDM, TenLSP 
                                FROM sanpham, danhmuc, loaisanpham
                                where sanpham.DM_id=danhmuc.id and sanpham.TH_id=loaisanpham.id and sanpham.TrangThai != 0
                                ORDER by DonGia desc 
                                LIMIT 3');
        $sp_khuyen_mai = DB::select('SELECT sanpham.id, TenSP, DonGia, HinhAnh1, KM_id, TenDM, TenLSP 
                                    FROM khuyenmai, sanpham, danhmuc, loaisanpham
                                    where sanpham.KM_id=khuyenmai.id and sanpham.DM_id=danhmuc.id and sanpham.TH_id=loaisanpham.id
                                    and khuyenmai.id!=1
                                    and ((CURDATE() BETWEEN NgayBD and NgayKT) or (NgayKT is NULL))
                                    and sanpham.TrangThai != 0
                                    ORDER by DonGia desc
                                    limit 3');
        $sp_moi = DB::select('SELECT sanpham.id, TenSP, DonGia, HinhAnh1, KM_id, TenDM, TenLSP 
                                FROM sanpham, danhmuc, loaisanpham
                                where sanpham.DM_id=danhmuc.id and sanpham.TH_id=loaisanpham.id and sanpham.TrangThai != 0
                                ORDER by sanpham.id desc 
                                LIMIT 6');
        return view('user.pages.index', ['sp_noi_bat'=>$sp_noi_bat, 'sp_khuyen_mai'=>$sp_khuyen_mai, 'sp_moi'=>$sp_moi]);
    }

    public function cart()
    {
        if(session()->get('id') != null) {
            while(true) {
                $result = DB::table('giohang')
                        ->join('sanpham', 'sanpham.id', '=', 'giohang.id_sp')
                        ->where('id_nd', Session()->get('id'))
                        ->whereColumn('so_luong', '>', 'SoLuong')
                        ->first();
                if($result) {
                    DB::table('giohang')
                        ->where('id_nd', $result->id_nd)
                        ->where('id_sp', $result->id_sp)
                        ->update(['so_luong' => $result->SoLuong]);
                } else {
                    $result = DB::table('giohang')
                            ->join('sanpham', 'sanpham.id', '=', 'giohang.id_sp')
                            ->where('id_nd', Session()->get('id'))
                            ->orderBy('ngay_tao', 'desc')
                            ->get();                            
                    return view('user.pages.cart', ['list_cart' => $result]);
                }
            }
        }
        else {
            $link1 = 'http://localhost:8080/phonestore/cart/';
            Session::put('link', $link1);
            return redirect()->route("login");
        }
    }

    public function thanh_toan_view($sp_thanh_toan)
    {
        $sp_thanh_toan = explode(",", $sp_thanh_toan);
        $nguoi_dung = DB::table('nguoidung')->where('id', Session()->get('id'))->first();
        $tinh_thanh = DB::table('tinhthanh')->get();
        $km = 0;
        $gia = 0;
        foreach ($sp_thanh_toan as $value) {
            $sp = DB::table('sanpham')->where('id', $value)->first();
            $khuyen_mai = DB::table('khuyenmai')->where('id', $sp->KM_id)->first();
            $sl = DB::table('giohang')->where('id_nd', Session()->get('id'))->where('id_sp', $value)->first()->so_luong;
            $gia += $sp->DonGia*$sl;
            if($khuyen_mai->don_vi == 'VNĐ') {
                $km = $km + $khuyen_mai->GiaTriKM*$sl;
            } else {
                $km = $km + ($sp->DonGia*$khuyen_mai->GiaTriKM/100)*$sl;
            }
        }        
        return view('user.pages.thanh_toan', ['sp_thanh_toan'=>$sp_thanh_toan, 'nguoi_dung'=>$nguoi_dung, 'tinh_thanh'=>$tinh_thanh, 'km'=>$km, 'gia'=>$gia]);
    }

    public function thanh_toan(Request $rq)
    {
        $nguoi_nhan = $rq->Ho.' '.$rq->Ten;
        $id_hd = DB::table('hoadon')->max('id') + 1;
        DB::insert('insert into hoadon (id, MaND, NguoiNhan, SDT, id_tinh, DiaChi, TongTien, TrangThai) values (?, ?, ?, ?, ?, ?, ?, ?)', [$id_hd, Session()->get('id'), $nguoi_nhan, $rq->SDT, $rq->id_tinh, $rq->dia_chi, $rq->tong_cong, 0]);

        if($rq->pttt != '') {
                DB::table('hoadon')
                    ->where('id', $id_hd)
                    ->update(['PhuongThucTT'=>$rq->pttt]);
            }

        foreach ($rq->sp_thanh_toan as $key => $value) {
            $DonGia = DB::table('sanpham')->where('id', $value)->first()->DonGia;
            $sl = DB::table('giohang')->where('id_nd', Session()->get('id'))->where('id_sp', $value)->first()->so_luong;            
            DB::insert('insert into chitiethoadon (MaHD, MaSP, SoLuong, DonGia) values (?, ?, ?, ?)', [$id_hd, $value, $sl, $DonGia]);            

            DB::table('giohang')
                    ->where('id_nd', Session()->get('id'))
                    ->where('id_sp', $value)
                    ->delete();

            $sl_max = DB::table('sanpham')->where('id', $value)->first()->SoLuong;
            DB::table('sanpham')
                    ->where('id', $value)
                    ->update(['SoLuong'=>$sl_max-$sl]);
        }
        return redirect()->intended('/user/don_mua');
    }

    public function search(Request $rq)
    {
        $input = $rq->search;
        $result = DB::table('sanpham')
                    ->where('TenSP', 'like', '%'.$input.'%')
                    ->where('TrangThai', '!=', 0)
                    ->orderBy('id', 'desc')
                    ->get();
        return view('user.pages.search', ['sp_tim_kiem'=>$result, 'tu_khoa'=>$input]);
    }
}