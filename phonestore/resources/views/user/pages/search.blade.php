@extends('user.layout')

@section('title', 'Tìm kiếm sản phẩm')

@section('content')
    <style type="text/css">
        .ko{
            width: 100%;
            text-align: center;
            font-size: 30px;
        }
    </style>



    <p class="title">Tìm kiếm sản phẩm</p>
    <div class="bo_loc">
        <input type="hidden" id="tu_khoa" value="{{ $tu_khoa }}">
        <select id="sx" onchange="bo_loc()">
            <option selected hidden value="0">Xếp theo</option>
            <option value="giam">Đơn giá giảm dần</option>
            <option value="tang">Đơn giá tăng dần</option>
        </select>
        <select id="gia" onchange="bo_loc()">
            <option selected hidden value="0">Đơn giá</option>
            <option value="1">Dưới 2 triệu</option>
            <option value="2">Từ 2 - 4 triệu</option>
            <option value="3">Từ 4 - 7 triệu</option>
            <option value="4">Từ 7 - 13 triệu</option>
            <option value="5">Từ 13 - 20 triệu</option>
            <option value="6">Trên 20 triệu</option>
        </select>
        <select id="ram" onchange="bo_loc()">
            <option selected hidden value="0">Ram</option>
            <?php
                $ram = DB::table('sanpham')->select('Ram')->distinct()->whereNotNull('Ram')->get();
            ?>
            @foreach($ram as $value)
                <option value="{{ $value->Ram }}">{{ $value->Ram }}</option>
            @endforeach
        </select>
        <select id="rom" onchange="bo_loc()">
            <option selected hidden value="0">Bộ nhớ trong</option>
            <?php
                $ram = DB::table('sanpham')->select('Rom')->distinct()->where('Rom', '!=', '')->whereNotNull('Ram')->get();
            ?>
            @foreach($ram as $value)
                <option value="{{ $value->Rom }}">{{ $value->Rom }}</option>
            @endforeach
        </select>
    </div>
    <div id="trang">
        @include('user.ajax.search')        
    </div>
@endsection