@extends('user.layout')

@section('title', 'Sản phẩm')

@section('content')
    <p class="title">{{ $TenDM." ".$TenLSP }}</p>
    <div class="grid-container">
        @foreach($list_product as $value)
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
@endsection