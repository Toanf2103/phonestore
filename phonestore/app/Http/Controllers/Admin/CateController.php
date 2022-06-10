<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function redirect;
use function view;

class CateController extends Controller
{
    public function index()
    {
        $cate = DB::table('danhmuc')->get();
        return view('admin.pages.category.index', ['list_cate' => $cate]);
    }

    public function addCate()
    {
        return view('admin.pages.category.add');
    }

    public function addCatePost(Request $request)
    {
        $data = $request->all();
        $new = new Category();
        $new->TenDM = $request->TenDM;
        $new->save();
        return redirect()->route("admin.category.index")->with('add', 'Data inserted thành công');
    }

    public function edit($id)
    {
        $cate = Category::find($id);
        $data['cate'] = $cate;
        return view('admin.pages.category.edit', $data);
    }

    public function update($id, Request $request)
    {
        $new = Category::find($id);
        $new->TenDM = $request->TenDM;
        $new->save();
        return redirect()->route("admin.category.index")->with('updated', 'Data updted thành công');
    }

    public function destroy($id)
    {
        $cate = Category::find($id);
        $cate->delete();
        return redirect()->route("admin.category.index")->with('del', 'Data deleted thành công');
    }
}
