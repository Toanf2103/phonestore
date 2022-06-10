<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Product;
use Illuminate\Http\Request;
use function redirect;
use function view;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $list = Order::orderBy('TrangThai')->get();

        return view('admin.pages.order.index', ['list_order' => $list]);
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $data['order'] = $order;
        return view('admin.pages.order.edit', $data);
    }

    public function update($id, Request $request)
    {
        $new = Order::find($id);
        $new->NguoiNhan = $request->NguoiNhan;
        $new->SDT = $request->SDT;
        $new->DiaChi = $request->DiaChi;
        $new->PhuongThucTT = $request->PhuongThucTT;
        $new->TongTien = $request->TongTien;
        $new->TrangThai = $request->TrangThai;
        $new->save();
        return redirect()->route("admin.order.index")->with('updated', 'Data updted thành công');
    }

    public function destroy($MaSP, $MaHD)
    {
        $find = DB::table('chitiethoadon')->where('MaSP', $MaSP)->where('MaHD', $MaHD);
        $find->delete();

        $order_detail = DB::table('chitiethoadon')
            ->join('sanpham', 'MaSP', 'id')
            ->where('MaHD', $MaHD)->select('chitiethoadon.*', 'sanpham.TenSP')->get();
        $data['order_detail'] = $order_detail;
        return view('admin.pages.ajax.list_product_order', $data);
    }

    public function detail($id)
    {
        $or = Order::find($id);
        $data['order'] = $or;

        $order_detail = DB::table('chitiethoadon')
            ->join('sanpham', 'MaSP', 'id')
            ->where('MaHD', $id)->select('chitiethoadon.*', 'sanpham.TenSP','sanpham.DonGia')->get();
        $data['order_detail'] = $order_detail;
        return view('admin.pages.order.detail', $data);
    }

    public function change_sl($MaSP, $MaHD, $sl)
    {
        $find = DB::table('chitiethoadon')
            ->where('MaSP', $MaSP)
            ->where('MaHD', $MaHD)
            ->update(['SoLuong' => $sl]);
//        $find -> SoLuong =  $sl;
//        $find->save();

        $order_detail = DB::table('chitiethoadon')
            ->join('sanpham', 'MaSP', 'id')
            ->where('MaHD', $MaHD)->select('chitiethoadon.*', 'sanpham.TenSP')->get();
        $data['order_detail'] = $order_detail;
        return view('admin.pages.ajax.list_product_order', $data);
    }

//   ---- Xử lí đơn hàng
// 0 - Chừ xác nhận
// 1 - Chờ lấy hàng
// 2 - Đang giao
// 3 - Đã giao
// 4 - Đã hủy
// 5 - Bom hàng
    public function action($id)
    {
        $order = Order::find($id);
        if ($order->TrangThai == 0) {
//            $detailOrder = DB::table('chitiethoadon')->where('MaHD', $id)->get();
////        dd($detailOrder);
//            if ($detailOrder) {
//                foreach ($detailOrder as $value) {
////                dd($value);
////                Trừ số lượng sản phẩm
//                    $product = Product::find($value->MaSP);
//                    $product->SoLuong = $product->SoLuong - $value->SoLuong;
//                    $product->save();
//                }
//            }
            //Đưa đơn hàng sang trang thái chờ lấy hàng
            $order->TrangThai = 1;
        } elseif ($order->TrangThai == 1) {//Đưa đơn hàng sang trang thái đang giao
            $order->TrangThai = 2;
        } elseif ($order->TrangThai == 2) {//Đưa đơn hàng sang trang thái đã giao
            $order->TrangThai = 3;
        }
        $order->save();
        return redirect()->back()/*->with('confirm', 'Đã chuyển trạng thái!')*/ ;
    }

    public function cancel($id)
    {
        $order = Order::find($id);
//        if ($order->TrangThai == 1) {
        $detailOrder = DB::table('chitiethoadon')->where('MaHD', $id)->get();
//        dd($detailOrder);
        if ($detailOrder) {
            foreach ($detailOrder as $value) {
//                dd($value);
//                Trừ số lượng sản phẩm
                $product = Product::find($value->MaSP);
                $product->SoLuong = $product->SoLuong + $value->SoLuong;
                $product->save();
            }
        }
        $order->TrangThai = 4;
        $order->save();
        return redirect()->back()/*->with('cancel', 'Đã hủy ĐH'. $id)*/
            ;

    }
    public function returns($id)
    {
        $order = Order::find($id);
//        if ($order->TrangThai == 1) {
        $detailOrder = DB::table('chitiethoadon')->where('MaHD', $id)->get();
//        dd($detailOrder);
        if ($detailOrder) {
            foreach ($detailOrder as $value) {
//                dd($value);
//                Trừ số lượng sản phẩm
                $product = Product::find($value->MaSP);
                $product->SoLuong = $product->SoLuong + $value->SoLuong;
                $product->save();
            }
        }
        $order->TrangThai = 5;
        $order->save();
        return redirect()->back()/*->with('cancel', 'Đã hủy ĐH'. $id)*/
            ;

    }
}
