@extends('user.layout')

@section('title', 'Đơn mua')

@section('content')
    <style type="text/css">
        .content{
            background-color: var(--bg);
        }
        .don_mua{
            width: 100%;
            cursor: default;
        }
        p{
            margin: 0;
        }
        .dieu_huong{
            background-color: #fff;
        }
        .dieu_huong label{
            display: flex;
            justify-content: center;
            align-items: center;            
            width: calc(100% / 6);
            height: 50px;            
            cursor: pointer;
            transition: 0.1s all ease;
        }
        #dk1:checked ~ .dk1{
            border-bottom: 5px solid var(--main-color);
        }
        #dk2:checked ~ .dk2{
            border-bottom: 5px solid var(--main-color);
        }
        #dk3:checked ~ .dk3{
            border-bottom: 5px solid var(--main-color);
        }
        #dk4:checked ~ .dk4{
            border-bottom: 5px solid var(--main-color);
        }
        #dk5:checked ~ .dk5{
            border-bottom: 5px solid var(--main-color);
        }
        #dk6:checked ~ .dk6{
            border-bottom: 5px solid var(--main-color);
        }
        .don_mua .don_hang{
            padding: 30px;
            margin-top: 30px;
            background-color: #fff;
        }
        .don_mua .don_hang .in_don_hang{
            float: left;
        }
        .don_mua .don_hang .trang_thai{
            width: 100%;
            text-align: right;
            padding-bottom: 10px;
            font-weight: bold;
            font-size: 20px;
            color: var(--main-color);
            border-bottom: 1px solid grey;
        }
        .don_mua .don_hang .sp{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid grey;
            margin-top: 20px;            
        }
        .don_mua .don_hang .sp>a{
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;
            text-decoration: none;
            margin-bottom: 15px;
        }
        .don_mua .don_hang .sp>a:hover{
            color: var(--color2);
        }
        .don_mua .don_hang .sp img{
            display: block;
            width: 80px;
            margin-right: 20px;
        }
        .don_mua .don_hang .sp p{
            font-size: 18px;
        }
        .don_mua .tong_tien{
            margin-top: 20px;
            text-align: right;
            font-size: 20px;
        }
        .don_mua .tong_tien span{
            color: var(--main-color);
            font-weight: bold;
        }
        .block{
            display: block;
        }
    </style>

    <div class="don_mua">
        <div class="dieu_huong flex">
            <input type="radio" name="dk" id="dk1" class="hidden" checked>
            <input type="radio" name="dk" id="dk2" class="hidden">
            <input type="radio" name="dk" id="dk3" class="hidden">
            <input type="radio" name="dk" id="dk4" class="hidden">
            <input type="radio" name="dk" id="dk5" class="hidden">
            <input type="radio" name="dk" id="dk6" class="hidden">
            <label for="dk1" class="dk1" onclick="doi_cua_so(1)">TẤT CẢ</label>
            <label for="dk2" class="dk2" onclick="doi_cua_so(2)">CHỜ XÁC NHẬN</label>
            <label for="dk3" class="dk3" onclick="doi_cua_so(3)">CHỜ LẤY HÀNG</label>
            <label for="dk4" class="dk4" onclick="doi_cua_so(4)">ĐANG GIAO</label>
            <label for="dk5" class="dk5" onclick="doi_cua_so(5)">ĐÃ GIAO</label>
            <label for="dk6" class="dk6" onclick="doi_cua_so(6)">ĐÃ HỦY</label>
        </div>
        <iframe src="." onload="doi_cua_so(1)" class="hidden"></iframe>
        <div class="noi_dung">
            <div id="cua_so_1" class="hidden">
                @foreach($don_mua as $value)
                    <div class="don_hang">
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>
                        <div class="trang_thai">
                            @switch($value->TrangThai)
                            @case(0)
                                CHỜ XÁC NHẬN
                                @break
                            @case(1)
                                CHỜ LẤY HÀNG
                                @break
                            @case(2)
                                ĐANG GIAO
                                @break
                            @case(3)
                                ĐÃ GIAO
                                @break
                            @case(4)
                                ĐÃ HỦY
                                @break
                            @endswitch
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="cua_so_2" class="hidden">
                @foreach($don_mua as $value)
                @if($value->TrangThai==0)
                    <div class="don_hang">
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>                    
                        <div class="trang_thai">
                            CHỜ XÁC NHẬN
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            <div id="cua_so_3" class="hidden">
                @foreach($don_mua as $value)
                @if($value->TrangThai==1)
                    <div class="don_hang"> 
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>                   
                        <div class="trang_thai">
                            CHỜ LẤY HÀNG
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            <div id="cua_so_4" class="hidden">
                @foreach($don_mua as $value)
                @if($value->TrangThai==2)
                    <div class="don_hang">  
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>                  
                        <div class="trang_thai">
                            ĐANG GIAO
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            <div id="cua_so_5" class="hidden">
                @foreach($don_mua as $value)
                @if($value->TrangThai==3)
                    <div class="don_hang">  
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>                  
                        <div class="trang_thai">
                            ĐÃ GIAO
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
            <div id="cua_so_6" class="hidden">
                @foreach($don_mua as $value)
                @if($value->TrangThai==4)
                    <div class="don_hang">   
                        <a href="{{ route('in_don_hang', [$value->id]) }}" target="blank" class="in_don_hang">In đơn hàng</a>                 
                        <div class="trang_thai">
                            ĐÃ HỦY
                        </div>                    
                        <div class="ds_sp">
                            <?php 
                                $sp = DB::table('hoadon')
                                        ->select('chitiethoadon.MaSP', 'TenSP', 'HinhAnh1', 'chitiethoadon.DonGia', 'chitiethoadon.SoLuong')
                                        ->join('chitiethoadon', 'hoadon.id', 'chitiethoadon.MaHD')
                                        ->join('sanpham', 'sanpham.id', 'chitiethoadon.MaSP')
                                        ->where('MaHD', $value->id)
                                        ->get();
                            ?>
                            @foreach($sp as $value1)
                                <div class="sp">
                                    <a href="{{ route('product.view', [$value1->MaSP]) }}">
                                        <img src="{{ asset('public/backend/'.$value1->HinhAnh1) }}">
                                        <p>{{ $value1->TenSP }}<br>số lượng : {{ $value1->SoLuong }}</p>
                                    </a>
                                    <p>{{ number_format($value1->DonGia, "0", "0", ".").' VNĐ' }}</p>
                                </div>
                            @endforeach
                            <div class="tong_tien">
                                Tổng số tiền : <span>{{ number_format($value->TongTien, "0", "0", ".").' VNĐ' }}</span>
                            </div>
                        </div>
                    </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection