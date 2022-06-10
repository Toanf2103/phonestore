<?php use Illuminate\Support\Facades\DB; ?>

@extends('user.layout')

@section('title', 'Sản phẩm Khuyến mãi')

@section('content')
    <p class="title">Sản phẩm khuyến mãi</p>
    <div id="trang" class="grid-container">
        @include("user.ajax.sp_khuyen_mai")
    </div>
    

    <?php
        $so_sp = DB::select('SELECT sanpham.id
                            FROM khuyenmai, sanpham
                            where sanpham.KM_id=khuyenmai.id
                            and khuyenmai.id!=1
                            and ((CURDATE() BETWEEN NgayBD and NgayKT) or (NgayKT is NULL))
                            ORDER by DonGia desc');
    ?>
    <div class="phan_trang">
    @for($i=1; $i <= count($so_sp) / 9; $i++)
        <button onclick="phan_trang({{ $i }})">{{ $i }}</button>
    @endfor
    @if(count($so_sp) % 9 != 0)
        <button onclick="phan_trang({{ $i }})">{{ $i }}</button>
    @endif
    </div>
@endsection