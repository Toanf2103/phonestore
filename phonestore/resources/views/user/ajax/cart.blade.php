<style>
    .content{
        background-color: var(--bg);
    }
    .gio_hang{
        width: 100%;
        background-color: #fff;
        min-height: calc(100vh - 120px);
        margin-bottom: 20px;
    }
    .gio_hang p{
        cursor: default;
        margin-bottom: 0;
    }
    .gio_hang .sp , .gio_hang .tieu_de{
        display: grid;            
        grid-template-columns: auto auto auto auto auto auto;
        align-items: center;
        background-color: #fff;
        padding: 10px 30px;
    }
    .gio_hang .sp{
        border-top: 1px solid black;
        justify-content: space-between;
        padding: 30px;
    }
    .gio_hang .kco{
        border-top: none;
        font-size: 20px;
    }
    .gio_hang input[type=checkbox] {
        cursor: pointer;
    }
    .gio_hang img{
        width: 60px;
        margin-right: 20px;
    }
    .gio_hang .ten_sp{
        display: flex;
        align-items: center;
        text-decoration: none;
        color: var(--main-color);
    }
    .gio_hang .ten_sp:hover{
        color: var(--color2);
    }
    .gio_hang .ten_sp p{
        width: 250px;
    }       
    .gio_hang>.sp>p{
        cursor: default;
    }
    .gio_hang>.sp>a>p{
        cursor: pointer;
    }
    .gio_hang input[type=number] {
        width: 60px;
        height: 30px;
        border-radius: 5px;
        outline: none;
        padding: 0 5px;
    }
    button {
        background-color: transparent;
        border: 0;
        color: var(--main-color);
        font-size: 25px;
    }
    button:hover {
        color: var(--color2);
    }
    .gio_hang .tieu_de p{
        font-size: 18px;
        font-weight: bold;
        color: var(--main-color);
    }
    .gio_hang .tieu_de .checkbox{
        width: 35px;
    }
    .gio_hang .tieu_de .ten{
        width: 360px;
    }
    .gio_hang .tieu_de .don_gia{
        width: 100px;
    }
    .gio_hang .tieu_de .so_luong{
        width: 100px;
    }
    .gio_hang .all{
        padding: 10px 30px;
        border-top: 1px solid black;
    }   
    #sp_chon{
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: sticky;
        bottom: 0;
        background-color: #fff;
        box-shadow: 0px -20px 20px var(--bg);
        padding: 20px;
    }
    #sp_chon .all button{
        font-size: 20px;
        margin-right: 20px;
    }
    #sp_chon .thanh_toan{
        display: flex;
        align-items: center;
    }
    #sp_chon .thanh_toan p{
        margin: 0 30px 0 0;
        cursor: default;
    }
    #sp_chon .thanh_toan button{
        padding: 10px 30px;
        background-color: var(--main-color);
        color: white;
    }
    #sp_chon .thanh_toan button:hover {
        background-color: var(--color2);
    }
    #sp_tuong_tu{
        margin-top: 20px;
        background-color: #fff;
    }
</style>
@if(count($list_cart) == 0)
    <div class="gio_hang">
        Không có sản phẩm nào trong giỏ hàng, pls mua hàng tiếp đi hoặc xem sản phẩm tương tự ở dưới
    </div>
@else
    <div id="load" class="hidden">
        <span class="fas fa-spinner xoay icon"> </span>
    </div>
    <div class="gio_hang" id="gio_hang">
        <div class="tieu_de">
            <p class="checkbox"></p>
            <p class="ten">Tên sản phẩm</p>
            <p class="don_gia">Đơn giá</p>
            <p class="so_luong">Số lượng</p>
            <p class="thanh_tien">Thành tiền</p>
            <p class="xoa"></p>
        </div>
        <?php $id_sp=array() ?>        
        @foreach ($list_cart as $value)
            <?php $id_sp[] = $value->id_sp ?>
            <div class="sp">
                <input id="check" name="check[]" type="checkbox" onclick="them_sp_thanh_toan({{ $list_cart }})">
                <?php
                    $TenDM = DB::table('danhmuc')->where('id', $value->DM_id)->first()->TenDM;
                ?>
                <a href="{{ route('product.view', [$value->id_sp]) }}" class="ten_sp">
                    <img src="{{ asset('public/backend/'.$value->HinhAnh1) }}">
                    <p>{{ $TenDM.' '.$value->TenSP }}</p>
                </a>
                <p id="don_gia">{{ number_format($value->DonGia, "0", "0", ".") }} VNĐ</p>
                <input type="number" id="{{ 'sl'.$value->id_sp }}" min="1" max="{{ $value->SoLuong }}" value="{{ $value->so_luong }}" onchange="up_sl({{ $value->id_sp}}, {{ $value->DonGia }}, {{ $list_cart }}, {{ $value->SoLuong }})">
                <p id="{{ $value->id_sp }}">{{ number_format($value->so_luong*$value->DonGia, "0", "0", ".") }} VNĐ</p>
                <input type="hidden" id="{{ 'thanh_tien'.$value->id_sp }}" value="{{ $value->so_luong*$value->DonGia }}">
                <button onclick="xoa_sp_gh({{ Session()->get('id') }}, {{ $value->id_sp }})">
                    <i class="far fa-trash-alt"></i>
                </button>
            </div>
        @endforeach
    </div>
    <div id="sp_chon">
        <div class="all">
            <button onclick="chon_all({{ $list_cart }})">Chọn tất cả ({{ count($list_cart) }})</button>
            <button onclick="bo_all({{ $list_cart }})">Bỏ chọn</button>
        </div>
        <div class="thanh_toan">
            <p id="tong_thanh_toan">Tổng thanh toán: 0 VNĐ</p>
            <button onclick="mua_hang()">Mua hàng</button>
        </div>
    </div>
@endif    
<div id="sp_tuong_tu">
    <?php
        if(isset($id_sp))
            $result = DB::table('sanpham')
                        ->whereNotIn('id', $id_sp)
                        ->where('TrangThai', '!=', 0)
                        ->limit(6)
                        ->orderBy('DonGia', 'desc')
                        ->get();
        else
            $result = DB::table('sanpham')->limit(6)->orderBy('DonGia', 'desc')->get();
    ?>
    <p class="title">Sản phẩm tương tự</p>
    <div class="grid-container">
        @foreach($result as $value)
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