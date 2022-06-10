<?php

namespace App\Http\Controllers\Admin;

use App\Models\Discount;
use Illuminate\Http\Request;
use function redirect;
use function view;

class DiscountController extends Controller
{
    public function index()
    {
        $list = Discount::get();
        return view('admin.pages.discount.index', ['list_discount' => $list]);
    }
    public function addDiscount()
    {
        return view('admin.pages.discount.add');
    }

    public function addDiscountPost(Request $request)
    {
        $data = $request->all();
        $new = new Discount();
        $new->TenKM = $request->TenKM;
        $new->LoaiKM = $request->LoaiKM;
        $new->GiaTriKM = $request->GiaTriKM;
        $new->NgayBD = $request->NgayBD;
        $new->NgayKT = $request->NgayKT;
        $new->TrangThai = $request->TrangThai;
        $new->save();
        return redirect()->route("admin.discount.index")->with('add', 'Data inserted thành công');
    }

    public function edit($id)
    {
        $discount = Discount::find($id);
        $data['discount'] = $discount;
        return view('admin.pages.discount.edit', $data);
    }

    public function update($id, Request $request)
    {
        $new = Discount::find($id);
        $new->TenKM = $request->TenKM;
        $new->LoaiKM = $request->LoaiKM;
        $new->GiaTriKM = $request->GiaTriKM;
        $new->NgayBD = $request->NgayBD;
        $new->NgayKT = $request->NgayKT;
        $new->TrangThai = $request->TrangThai;
        $new->save();
        return redirect()->route("admin.discount.index")->with('updated', 'Data updted thành công');
    }

    public function destroy($id)
    {
        $find = Discount::find($id);
        $find->delete();
        return redirect()->route("admin.discount.index")->with('del', 'Data deleted thành công');
    }
}
