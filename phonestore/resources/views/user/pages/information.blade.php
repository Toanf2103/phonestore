@extends('user.layout')

@section('title', 'Thông tin người dùng')

@section('content')
    <style type="text/css">
        .info-box{
            width: 100%;
            padding: 30px;
            position: relative;
        }
        .info-box table{
            width: 100%;
        }
        .info-box table tr td{
            padding: 10px 0px;
        }
        .info-box table tr td:first-child {
            width: 200px;
            text-align: right;
            padding-right: 50px;
        }
        .info-box input[type=text], select, textarea {
            width: 50%;
            outline: none;
            padding: 0 10px;
            height: 30px;
        }
        .info-box input[type=submit] {
            width: 80px;
            height: 50px;
            margin-top: 30px;
            position: absolute;
            left: 25%;
            background-color: var(--main-color);
            color: #fff;
        }
    </style>

    @if(session('mes'))
        <div class="alert alert-success" role="alert">
            {{ session('mes') }}
        </div>
    @endif
    <div class="info-box">
        <h5>HỒ SƠ CỦA TÔI</h5>
        <p>Quản lý thông tin hồ sơ để bảo mật tài khoản</p>
        <hr>
        <form action="{{ route('user_inf_edid') }}" method="POST">
            @csrf
            <table>
                <tr>
                    <td>Họ</td>
                    <td>
                        <input type="text" name="ho" value="{{ $user->Ho }}">
                    </td>
                </tr>
                <tr>
                    <td>Tên</td>
                    <td>
                        <input type="text" name="ten" value="{{ $user->Ten }}">
                    </td>
                </tr>
                <tr>
                    <td>Số Điện thoại</td>
                    <td>
                        <input type="text" name="sdt" value="{{ $user->SDT }}">
                    </td>
                </tr>
                <tr>
                    <td>Giới tính</td>
                    <td>
                        <select name="gt">                            
                            <option value="Nam" @if($user->GioiTinh == 'Nam') selected @endif>Nam</option>
                            <option value="Nữ" @if($user->GioiTinh == 'Nữ') selected @endif>Nữ</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tỉnh/Thành phố</td>
                    <td>
                        <select name="id_tinh">
                            <?php $result = DB::table('tinhthanh')->get(); ?>
                            @foreach($result as $value)                        
                                <option value="{{ $value->id_tinh }}" @if($value->id_tinh == $user->id_tinh) selected @endif>{{ $value->ten_tinh }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type="text" name="dia_chi" value="{{ $user->DiaChi }}">
                    </td>
                </tr>
            </table>
            <input type="submit" value="Lưu">
        </form>
    </div>
@endsection
