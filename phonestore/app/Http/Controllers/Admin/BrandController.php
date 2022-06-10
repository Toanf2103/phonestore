<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function redirect;
use function view;

class BrandController extends Controller
{
    public function index()
    {
        $list = DB::table('loaisanpham')->get();
        return view('admin.pages.brand.index', ['list_brand' => $list]);
    }

    public function addBrand()
    {
        return view('admin.pages.brand.add');
    }

    public function addBrandPost(Request $request)
    {
        $data = $request->all();
        $new = new Brand();
        $new->TenLSP = $request->TenLSP;
        $new->Mota = $request->Mota;
        $new->HinhAnh = $request->HinhAnh;
        $new->save();
        return redirect()->route("admin.brand.index")->with('add', 'Data inserted thành công');
    }

    public function edit($id)
    {
        $br = Brand::find($id);
        $data['br'] = $br;
        return view('admin.pages.brand.edit', $data);
    }

    public function update($id, Request $request)
    {
        $new = Brand::find($id);
        $new->TenLSP = $request->TenLSP;
        $new->Mota = $request->Mota;
        $new->HinhAnh = $request->HinhAnh;
        $new->save();
        return redirect()->route("admin.brand.index")->with('updated', 'Data updted thành công');
    }

    public function destroy($id)
    {
        $br = Brand::find($id);
        $br->delete();
        return redirect()->route("admin.brand.index")->with('del', 'Data deleted thành công');
    }

    public function index_cate()
    {
        $cate = DB::table('danhmuc')->get();
        return view('admin.pages.category.index', ['list_cate' => $cate]);
    }
}
