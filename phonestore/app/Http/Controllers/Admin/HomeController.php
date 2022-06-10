<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use function view;

session_start();

class HomeController extends Controller
{

    public function dashboard()
    {
        $banchay = DB::table('sanpham')->orderBy('SoLuong')->take(5)->get();
        $noibat = DB::table('loaisanpham')->take(5)->get();
        $data['banchay'] = $banchay;
        $data['noibat'] = $noibat;
        return view('admin.pages.dashboard', $data);
    }
    public function contact()
    {
        return view('contact.index');
    }
}

