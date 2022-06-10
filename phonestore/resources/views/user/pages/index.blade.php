@extends('user.layout')

@section('title', 'Trang chủ')

@section('content')
    <style type="text/css">
        .content{
            background-color: var(--bg);
        }
        .phan_loai{
            margin-top: 30px;
            background-color: #fff;
        }
        .xem_all{
            margin-right: 20px;
            font-size: 20px;
        }
    </style>

    <div id="trang_chu">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <?php 
                    $banner = DB::table('banner')->get();
                    $kt=true;
                    foreach ($banner as $value) {
                        $link = 'public/'.$value->HinhAnh;
                        echo $link;
                        if($kt) {
                            echo    '<div class="carousel-item active" data-bs-interval="2000">
                                        <img src="'.$link.'" class="d-block w-100" alt="...">
                                    </div>';
                            $kt=false;
                        } else {
                            echo    '<div class="carousel-item" data-bs-interval="2000">
                                        <img src="'.$link.'" class="d-block w-100" alt="...">
                                    </div>';
                        }

                    }
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="phan_loai">
            <div class="flex">
                <p class="title">SẢN PHẨM KHUYẾN MÃI</p>
                <a href="{{ route('sp_khuyen_mai') }}" class="xem_all">Xem tất cả</a>
            </div>
            <div class="grid-container">        
                @foreach($sp_khuyen_mai as $value)
                <div class="grid-item">
                    <a href="{{ route('product.view', [$value->id]) }}">
                        <div class="discound">
                            <?php $km = DB::table('khuyenmai')->where('id', $value->KM_id)->get()->first() ?>
                            <span> @if($km->id!=1) {{ $km->TenKM; }} @endif </span>
                        </div>
                        <div class="product_img">
                            <img src="{{ asset('public/backend/'.$value->HinhAnh1) }}" alt="">
                        </div>
                        <div class="product_name">
                            <p>{{ $value->TenSP }}</p>
                        </div>
                        <div class="price">
                            <p>Giá: {{ number_format($value->DonGia, "0", "0", ".") }}đ</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        
        <div class="phan_loai">
            <div class="flex">
                <p class="title">SẢN PHẨM NỔI BẬT</p>
            </div>
            <div class="grid-container">
                @foreach($sp_noi_bat as $value)
                <div class="grid-item">
                    <a href="{{ route('product.view', [$value->id]) }}">
                        <div class="discound">
                            <?php $km = DB::table('khuyenmai')->where('id', $value->KM_id)->get()->first() ?>
                            <span> @if($km->id!=1) {{ $km->TenKM; }} @endif </span>
                        </div>
                        <div class="product_img">
                            <img src="{{ asset('public/backend/'.$value->HinhAnh1) }}" alt="">
                        </div>
                        <div class="product_name">
                            <p>{{ $value->TenSP }}</p>
                        </div>
                        <div class="price">
                            <p>Giá: {{ number_format($value->DonGia, "0", "0", ".") }}đ</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>        

        <div class="phan_loai">
            <div class="flex">
                <p class="title">SẢN PHẨM MỚI</p>
            </div>
            <div class="grid-container">        
                @foreach($sp_moi as $value)
                <div class="grid-item">
                    <a href="{{ route('product.view', [$value->id]) }}">
                        <div class="discound">
                            <?php $km = DB::table('khuyenmai')->where('id', $value->KM_id)->get()->first() ?>
                            <span> @if($km->id!=1) {{ $km->TenKM; }} @endif </span>
                        </div>
                        <div class="product_img">
                            <img src="{{ asset('public/backend/'.$value->HinhAnh1) }}" alt="">
                        </div>
                        <div class="product_name">
                            <p>{{ $value->TenSP }}</p>
                        </div>
                        <div class="price">
                            <p>Giá: {{ number_format($value->DonGia, "0", "0", ".") }}đ</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
