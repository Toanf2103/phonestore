<!DOCTYPE html>
<html>
<head lang="vi-vn">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="SHORTCUT ICON" href="{{asset('public/imgs/logo_title.png')}}">
	<title>TNT Shop | Xuất hóa đơn</title>
	<style type="text/css">
		h1, h2{
			margin-top: 80px;
			text-align: center;
		}
		table{
			width: 50%;
			margin: 0 auto;
			font-size: 20px;
		}
		.nguoi_dung tr td:first-child{
			text-align: right;
			padding-right: 30px;
		}
		.don_hang{
			text-align: center;
			margin-top: 50px;			
		}
		.don_hang tr td{
			border: 1px solid grey;
		}
	</style>
</head>
<body>

	<h1>TNT SHOP HOA DON</h1>
	<table class="nguoi_dung">
		<tr>
			<td>Ma hoa don:</td>
			<td>{{ $id_hd }}</td>
		</tr>
		<tr>
			<td>Trang thái:</td>
			<td>
				@switch($nguoi_dung->TrangThai)
                @case(0)
                    Cho xac nhan
                    @break
                @case(1)
                    Cho lay hang
                    @break
                @case(2)
                    Dang giao
                    @break
                @case(3)
                    Da giao
                    @break
                @case(4)
                    Da huy
                    @break
                @endswitch
			</td>
		</tr>
		<tr>
			<td>Ten nguoi nhan:</td>
			<td>{{ $nguoi_dung->NguoiNhan }}</td>
		</tr>
		<tr>
			<td>SDT:</td>
			<td>{{ $nguoi_dung->SDT }}</td>
		</tr>
		<tr>
			<td>Dia chi:</td>
			<td>{{ $nguoi_dung->DiaChi }}</td>
		</tr>
	</table>

	<table class="don_hang">
		<tr>
			<td>Ten san pham</td>
			<td>Don gia</td>
			<td>So Luong</td>
			<td>Khuyen mai</td>			
		</tr>
		@foreach($san_pham as $value)
			<tr>
				<td>{{ $value['ten'] }}</td>
				<td>{{ number_format($value['DonGia'], "0", "0", ".") }} VND</td>
				<td>{{ $value['so_luong'] }}</td>
				<td>{{ number_format($value['khuyen_mai'], "0", "0", ".") }} VND</td>
			</tr>
		@endforeach
		<tr>
			<td colspan="2">Tong don</td>
			<td colspan="2">{{ number_format($gia, "0", "0", ".") }} VND</td>
		</tr>
		<tr>
			<td colspan="2">Phi van chuyen</td>
			<td colspan="2">{{ number_format($van_chuyen, "0", "0", ".") }} VND</td>
		</tr>
		<tr>
			<td colspan="2">Tong thanh toan</td>
			<td colspan="2">{{ number_format($nguoi_dung->TongTien, "0", "0", ".") }} VND</td>
		</tr>
	</table>
	<h2>Cam on quy khach da mua san pham!</h2>
</body>
</html>