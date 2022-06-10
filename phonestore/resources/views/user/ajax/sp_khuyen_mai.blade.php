
@for($i=$trang; $i<$trang_max; $i++)
<div class="grid-item">
    <a href="{{ route('product.view', [$sp_khuyen_mai[$i]->id]) }}">
        <div class="discound">
            <?php $km = DB::table('khuyenmai')->where('id', $sp_khuyen_mai[$i]->KM_id)->get()->first() ?>
            <span> @if($km->id!=1) {{ $km->TenKM; }} @endif </span>
        </div>
        <div class="product_img">
            <img src="{{ asset('public/backend/'.$sp_khuyen_mai[$i]->HinhAnh1) }}" alt="">
        </div>
        <div class="product_name">
            <p>{{ $sp_khuyen_mai[$i]->TenSP }}</p>
        </div>
        <div class="price">
            <p>Giá: {{ number_format($sp_khuyen_mai[$i]->DonGia, "0", "0", ".") }}đ</p>
        </div>
    </a>
</div>
@endfor