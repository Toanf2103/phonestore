<div class="list-product">
    <div class="list-product-menu">
        <ul>
            <?php $danh_muc = DB::table('danhmuc')->get() ?>
            @foreach($danh_muc as $value)
            <li>
                <input type="checkbox" class="check-menu" id="menu-plus-.{{ $value->id }}" @if(isset($DM_id) && $DM_id == $value->id) checked @endif>
                <label for="menu-plus-.{{ $value->id }}">
                    <div class="menu-item-1">
                        <p>{{ $value->TenDM }}</p>
                        <div class="icon-menu"><i class="fas fa-angle-down"></i></div>
                    </div>
                </label>
                <div class="menu-item-2">
                    <ul>
                        <?php 
                            $thuong_hieu = DB::table('loaisanpham')
                                        ->select('TenLSP', 'sanpham.DM_id', 'sanpham.TH_id')
                                        ->distinct('TenLSP')
                                        ->join('sanpham', 'sanpham.TH_id', '=', 'loaisanpham.id')
                                        ->join('danhmuc', 'sanpham.DM_id', '=', 'danhmuc.id')
                                        ->where('danhmuc.id', $value->id)
                                        ->get();
                        ?>
                        @foreach($thuong_hieu as $value)
                            @if(isset($TH_id) && $TH_id == $value->TH_id && $DM_id == $value->DM_id)
                            <li>
                                <a href="{{ route('user.product.category_brand.view', [$value->DM_id, $value->TH_id]) }}" class="noi_bat">{{ $value->TenLSP }}</a>
                            </li>
                            @else
                            <li>
                                <a href="{{ route('user.product.category_brand.view', [$value->DM_id, $value->TH_id]) }}">{{ $value->TenLSP }}</a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                </div>		
            </li>
            @endforeach
        </ul>
    </div>
</div>