<?php

namespace App\Http\Controllers\User;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function back;
use function redirect;
use function view;

class ProductController extends Controller
{
    public function user_viewProductCategoryBrand($DM_id, $TH_id)
    {
        $list = DB::table('sanpham')
                ->where('DM_id', $DM_id)
                ->where('TH_id', $TH_id)
                ->where('TrangThai', '!=', 0)
                ->orderBy('DonGia', 'desc')
                ->get();
        $TenDM = DB::table('danhmuc')->where('id', $DM_id)->first()->TenDM;
        $TenLSP = DB::table('loaisanpham')->where('id', $TH_id)->first()->TenLSP;
        return view('user.pages.list_product', ['list_product' => $list, 'DM_id' => $DM_id, 'TH_id' => $TH_id, 'TenDM'=>$TenDM, 'TenLSP'=>$TenLSP]);
    }

    public function view_product($id)
    {
        $list = DB::table('sanpham')->where('id', $id)->first();
        $TenDM = DB::table('danhmuc')->where('id', $list->DM_id)->first()->TenDM;
        $TenLSP = DB::table('loaisanpham')->where('id', $list->TH_id)->first()->TenLSP;
        $danh_gia = DB::table('danh_gia_sp')
                    ->join('nguoidung', 'danh_gia_sp.id_nd', 'nguoidung.id')
                    ->where('id_sp', $id)
                    ->whereNull('id_tra_loi')
                    ->orderBy('id_danh_gia', 'desc')
                    ->get();
        return view('user.pages.product', ['product' => $list, 'DM_id' => $list->DM_id, 'TH_id'=>$list->TH_id, 'TenDM'=>$TenDM, 'TenLSP'=>$TenLSP, 'danh_gia'=>$danh_gia]);
    }

    public function sp_khuyen_mai()
    {
        $sp_khuyen_mai = DB::select('SELECT *
                                    FROM khuyenmai, sanpham
                                    where sanpham.KM_id=khuyenmai.id
                                    and khuyenmai.id!=1
                                    and ((CURDATE() BETWEEN NgayBD and NgayKT) or (NgayKT is NULL))
                                    and sanpham.TrangThai != 0
                                    ORDER by DonGia desc');
        return view('user.pages.sp_khuyen_mai', ['sp_khuyen_mai'=>$sp_khuyen_mai, 'trang'=>0, 'trang_max'=>9]);
    }
}

