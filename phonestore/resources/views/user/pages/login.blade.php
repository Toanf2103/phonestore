@extends('user.layout')

@section('title', 'Đăng nhập')

@section('content')
<style>
    .dang_nhap{
        width: 100%;
        padding: 150px 0;
        background-color: #fff;            
    }
    .dang_nhap>form{
        display: block;
        width: 350px;
        margin: 0 auto;
        background-color: #fff;
        padding: 20px;
        border: 1px solid var(--color2);
        border-radius: 20px;
        box-shadow: 10px 10px var(--color2);
    }
    .dang_nhap h2 {
        font-weight: bold;
        color: var(--main-color);
        margin-bottom: 20px;
        cursor: default;
        text-align: center;
    }
    .dang_nhap input {
        width: 100%;
        height: 30px;
        border: 1px solid #dcdddd;
        border-radius: 10px;
        outline: none;
        box-sizing: border-box;
        padding: 0px 20px;
        margin-bottom: 20px;
    }
    .dang_nhap input[type=submit] {
        background-color: var(--main-color);
        color: white;
        cursor: pointer;
    }
    .dang_nhap input[type=submit]:hover{
        background-color: var(--color2);
        transition: 0.1s all ease;
    }
    .dang_nhap a {
        text-decoration: none;
        color: var(--main-color);
        font-size: 15px;
    }       
    .dang_nhap a:hover {
        color: var(--color2);
        transition: 0.1s all ease;
    }
    #error{
        color: red;
        margin-bottom: 10px;
    }

</style>
@if(session('add'))
    <div class="alert alert-success" role="alert">
        {{ session('add') }}
    </div>
@endif
<div class="dang_nhap">
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <h2>ĐĂNG NHẬP CỬA HÀNG</h2>
        @if(Session()->get('link') == null)
            <input type="hidden" name="link" value="{{ url()->previous() }}">
        @else
            <input type="hidden" name="link" value="{{ Session()->get('link') }}">
        @endif
        <input type="text" name="email" placeholder="Tài khoản" required value="<?php if(isset($email)) echo $email ?>" autocomplete="off"><br>
        <input type="password" name="password" placeholder="Mật khẩu" required>
        <div id="error">
            <!-- {{ Session::get('message') }} -->
            <?php if(isset($error)) echo $error ?>
        </div>
        <input type="submit">
        <a href="{{ route('quen_mk_view') }}">Quên mật khẩu?</a><br>
    </form>
</div>
@endsection