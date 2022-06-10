<?php $i = 1; $sum =0;
?>
@foreach($order_detail as $vl)
    <tr>
        <td><?php echo $i++ ?></td>
        <td>{{ $vl -> MaSP }}</td>
        <td>{{ $vl -> TenSP }}</td>
        <td>
            <input min="1" id="{{$vl -> MaSP}}" onchange="change_sl({{$vl -> MaSP}}, {{ $vl -> MaHD }})" class="form-control" value="{{ $vl -> SoLuong }}" type="number">
        </td>
        <td>
            {{ number_format(($vl -> DonGia),0,',','.') }}
            <small>VNĐ</small>
        </td>
        <td></td>
        <td>
            {{ number_format(($vl -> SoLuong * $vl -> DonGia),0,',','.') }}
            <small>VNĐ</small>
        </td>
        <td class="text-right">
            <button class="btn btn-danger" onclick="delete_product({{$vl -> MaSP}}, {{ $vl -> MaHD }})">
                <i class="fas fa-trash"></i>
            </button>
        </td>
    </tr>
    <div style="visibility: hidden; height: 0px;">{{ $sum = $sum + ($vl -> SoLuong * $vl -> DonGia) }}</div>
@endforeach
<tr>
    <td colspan="6"></td>
    <td class="text-primary font-weight-bold">
        {{ number_format($sum,0,',','.') }}
        <small>VNĐ</small>
    </td>
    <td></td>
</tr>
