@extends('user.layout')

@section('title', 'Chi tiết sản phẩm')

@section('content')

    <style>
        .product{
            display: flex;
            padding-left: 20px;
            background-color: #e9edf0;            
        }
        .slider-container{
            height: 400px;
            width: 300px;
            position: relative;
            margin-top: 20px;
            overflow: hidden; 
            text-align: center;
        }
        .menu {
            z-index: 900;
            margin: 20px 50px;
            width: 100%;
            bottom: 0;
            align-items: center;
        }
        .menu label {
            cursor: pointer;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 0 .2em 1em;
            transition: all .3s ease;
            background-position: 50% 50%;
            border: 0.8px solid var(--color2);
            &:hover {
                background: red;
            }
        }
        input[type=radio]{
            display: none;
        }

        .slide {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 100%;
            z-index: 10;
            padding: 8em 1em 0;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: 50% 50%;
            transition: left 0s .3s;
        }

        [id^="slide"]:checked + .slide {
            left: 0;
            z-index: 100;
            transition: left .5s ease-out;
        }

        .slide-1 {
            background-image: url({{ asset('public/backend/'.$product->HinhAnh1) }});
        }
        .slide-2 {
            background-image: url({{ asset('public/backend/'.$product->HinhAnh2) }});
        }
        .slide-3 {
            background-image: url({{ asset('public/backend/'.$product->HinhAnh3) }});
        }
        .label1{
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('public/backend/'.$product->HinhAnh1) }});
        }
        .label2{
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('public/backend/'.$product->HinhAnh2) }});
        }
        .label3{
            background-repeat: no-repeat;
            background-size: contain;
            background-image: url({{ asset('public/backend/'.$product->HinhAnh3) }});
        }
        .thongtin{      
            margin-left: 30px;
            background-color: #fff;
            padding: 30px;
            width: 100%;
            
        }
        .product_name{
            font-weight: bold;
            font-size: 20px;
            text-transform: uppercase;
        }
        .mo_ta>p, .mo_ta>blockquote{
            margin-top: 30px;
        }
        .buttons{
            height: 50px;
            margin-top: 30px;
            margin-right: 30px;
            padding: 10px;
            border: none;
            color: grey;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
        }
        .buttons:hover{
            background-color: rgb(255, 75, 75);
            color: #fff;
        }
        #chi_tiet{
            padding: 50px;
            background-color: #fff;
        }
        #chi_tiet .thso_dgia{
            margin-right: 30px;
            color: grey;
            font-weight: bold;
            cursor: pointer;
            padding: 5px;
        }
        #chi_tiet .thong_so, #chi_tiet .danh_gia{
            display: none;
            margin-top: 50px;
        }
        #thso:checked ~ .thso, #dgia:checked ~ .dgia{
            color: #000;
            border-bottom: 3px solid red;
        }
        #thso:checked ~ .thong_so, #dgia:checked ~ .danh_gia{
            display: block;
        }
        table{
            margin-top: 10px;
            width: 100%;
        }
        table td{
            margin-left: 0;
            padding: 10px;
            border-top: 1px solid #acaaaa;
            border-collapse: collapse;
        }
        .so_luong{
            margin-top: 30px;
        }
        .so_luong input[type=number] {
            height: 30px;
            width: 55px;
            padding: 5px 5px;
            outline: none;
            margin-right: 20px;
        }
        .so_luong span{
            color: grey;
            cursor: default;
        }
        .danh_gia .gui{
            justify-content: flex-start;
            margin-bottom: 30px;
        }
        .danh_gia textarea{
            width: 90%;
            margin-right: 50px;
            height: 50px;
            padding: 10px;
        }
        .danh_gia button{
            margin: 0;
            background-color: var(--main-color);
            border: none;
            color: #fff;
            width: 50px;
            height: 50px;
        }
        .danh_gia button:hover{
            background-color: var(--color2);
        }
        .danh_gia .danh_gia_cha{
            margin-top: 30px;
            background-color: #f8f8f8;
            padding: 10px;
        }
        .danh_gia .avata{
            display: inline-block;
            background-color: #C2C2C2;
            width: 25px;
            height: 25px;
            text-align: center;
            margin-right: 10px;
            margin-bottom: 5px;
        }
        .danh_gia .avata_admin{
            background-color: transparent;
        }
        .danh_gia .quyen{
            margin-left: 30px;
            background-color: var(--main-color);
            color: white;
            padding: 5px;
            cursor: default;
            font-size: 13px;
        }
        .danh_gia .ten_nd{
            font-weight: bold;
            font-size: 18px;
        }
        .danh_gia .noi_dung{
            font-size: 15px;
        }
        .danh_gia .danh_gia_cha>button{            
            border: none;
            color: blue;
            background-color: transparent;
            margin-left: 10px;
        }
        .danh_gia .danh_gia_con{
            margin-top: 20px;
            margin-left: 50px;
        }
        .toanf{
            cursor: default;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 250px;
            padding: 20px;
            background-color: var(--color2);
            color: #fff;
            text-align: center;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            z-index: 1000;
        }
    </style>

    <div id="load" class="hidden">
        <span class="fas fa-spinner xoay icon"> </span>
    </div>
    <div id="message" class ="toanf hidden">
        Thêm vào giỏ hàng thành công!
    </div>
    <div class="product">
        <div class="avata">
            <div class="slider-container">                           
                <input id="slide-dot-1" type="radio" name="slides" checked>
                <div class="slide slide-1"></div>

                <input id="slide-dot-2" type="radio" name="slides">
                <div class="slide slide-2"></div>

                <input id="slide-dot-3" type="radio" name="slides">
                <div class="slide slide-3"></div>
            </div>
            <div class="menu">
                <label for="slide-dot-1" class="label1"></label>
                <label for="slide-dot-2" class="label2"></label>
                <label for="slide-dot-3" class="label3"></label>
            </div>
        </div>
        <div class="thongtin">
            <p class="product_name">{{ $TenDM.' '.$product->TenSP }}</p>
            <p class="price">{{ number_format($product->DonGia, "0", "0", ".") }} VNĐ</p>
            <div class="mo_ta"><?php if($product->MoTa == null) echo "<p>Chúng tôi đang cập nhật mô tả cho sản phẩm này...</p>"; else echo $product->MoTa ?></div>
            <div class="so_luong">
                <input type="number" id="so_luong" min="1" max="{{$product->SoLuong}}" value="1">
                <span>{{$product->SoLuong}} sản phẩm có sẵn</span>
            </div>
            <button class="buttons" onclick="them_sp_gio_hang('{{ Session()->get('id') }}', {{ $product->id }})">Thêm vào giỏ hàng</button>        
            <a href="#chi_tiet"><button class="buttons">Chi tiết</button></a>
        </div>        
    </div>

    <div id="chi_tiet">
        <input type="radio" name="thso_dgia" id="thso" checked>
        <input type="radio" name="thso_dgia" id="dgia">
        <label class="thso_dgia thso" for="thso">THÔNG SỐ</label>
        <label class="thso_dgia dgia" for="dgia">ĐÁNH GIÁ</label>
        <div class="thong_so">
            THÔNG SỐ KỸ THUẬT
            <table>
                <tr>
                    <td>Màn Hình</td>
                    <td>{{ $product->ManHinh }}</td>
                </tr>
                <tr>
                    <td>Hệ điều hành</td>
                    <td>{{ $product->HDH }}</td>
                </tr>
                <tr>
                    <td>Camera sau</td>
                    <td>{{ $product->CamSau }}</td>
                </tr>
                <tr>
                    <td>Camera trước</td>
                    <td>{{ $product->CamTruoc }}</td>
                </tr>
                <tr>
                    <td>Chip</td>
                    <td>{{ $product->CPU }}</td>
                </tr>
                <tr>
                    <td>Ram</td>
                    <td>{{ $product->Ram }}</td>
                </tr>
                <tr>
                    <td>Rom</td>
                    <td>{{ $product->Rom }}</td>
                </tr>
                @if($product->SDCard != '')
                    <tr>
                        <td>Bộ nhớ</td>
                        <td>{{ $product->SDCard }}</td>
                    </tr>
                @endif                
                <tr>
                    <td>Pin</td>
                    <td>{{ $product->Pin }}</td>
                </tr> 
                <?php echo $product->thong_so_khac ?>              
            </table>
        </div>
        <div class="danh_gia">
            <div class="flex gui">
                @csrf
                <textarea id="viet_danh_gia" placeholder="Viết đánh giá..." onkeyup="kt_dang_nhap('{{ Session()->get('id') }}')"></textarea>
                <button onclick="danh_gia('{{ Session()->get('id') }}', {{ $product->id }})">Gửi</button>
            </div>
            <div id="vung_danh_gia">
                @include('user.ajax.danh_gia')                
            </div>
        </div>
    </div>
@endsection