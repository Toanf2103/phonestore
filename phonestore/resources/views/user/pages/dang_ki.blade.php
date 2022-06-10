@extends('user.layout')

@section('title', 'Đăng kí')

@section('content')
<style>
    .dang_ki{
        width: 100%;
        padding: 80px 0;
        background-color: #fff;            
    }
    .dang_ki>form{
        display: block;
        width: 400px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid var(--color2);
        border-radius: 20px;
        box-shadow: 10px 10px var(--color2);
    }
    .dang_ki h2 {
        font-weight: bold;
        color: var(--main-color);
        margin-bottom: 20px;
        cursor: default;
        text-align: center;
    }
    .dang_ki input, select {
        width: 100%;
        height: 30px;
        border: 1px solid #dcdddd;
        border-radius: 10px;
        outline: none;
        box-sizing: border-box;
        padding: 0px 20px;
        margin-bottom: 20px;
    }
    .dang_ki input[type=submit] {
        background-color: var(--main-color);
        color: white;
        cursor: pointer;
    }
    .dang_ki input[type=submit]:hover{
        background-color: var(--color2);
        transition: 0.1s all ease;
    }
    .dang_ki #error{
        color: red;
        margin-bottom: 10px;
    }
    .dang_ki #ma_capcha{
        width: 70px;
        background-color: var(--color2);
        color: #fff;
        border-radius: 5px;
        padding: 5px;
        text-align: center;
    }
    .dang_ki .reset{
        margin: 0 10px;
        cursor: pointer;
    }
    .dang_ki #nhap_ma_capcha{
        width: 190px;
    }
</style>

<div class="dang_ki">
    <form action="/phonestore/dang_ki" method="POST">    
        <h2>ĐĂNG KÍ THÀNH VIÊN</h2>
        @csrf
        <input type="text" name="Ho" value="<?php if(isset($ho)) echo $ho; ?>" placeholder="Họ và tên lót" required autocomplete="off"><br>
        <input type="text" name="Ten" value="<?php if(isset($ten)) echo $ten; ?>" placeholder="Tên" required autocomplete="off"><br>
        <select name="GioiTinh">
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
        </select>
        <input type="text" name="SDT" placeholder="Số điện thoại (Nhập đúng SĐT của bạn)" autocomplete="off" pattern="[0-9]+" minlength="10" maxlength="15" required>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>" placeholder="Email (Nhập đúng Email của bạn)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autocomplete="off"><br>
        <select name="id_tinh">
        <?php $result = DB::table('tinhthanh')->get(); ?>
        @foreach($result as $value)            
            <option value="{{ $value->id_tinh }}">{{ $value->ten_tinh }}</option>
        @endforeach
        </select>
        <input type="password" name="password" placeholder="Mật khẩu (Nhập 8 kí tự trở lên)" pattern=".{8,}" required>
        <input type="password" name="password_kt" placeholder="Xác nhận mật khẩu" required>
        <input type="text" id="ma_capcha" disabled required>
        <input type="hidden" id="ma_capcha_hidden" name="ma_capcha">
        <label class="reset" onclick="reset_capcha()"><i class="fas fa-sync-alt"></i></label>
        <input type="text" id="nhap_ma_capcha" name="ma_capcha_nhap" maxlength="5" placeholder="Nhập mã capcha" required>
        <div id="error">
            <?php if(isset($error)) echo $error; ?>
        </div>
        <input type="submit" value="ĐĂNG KÍ">
    </form>
</div>
@endsection