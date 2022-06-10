@extends('user.layout')

@section('title', 'Quên mật khẩu')

@section('content')
<style>
    .mat_khau{
        width: 100%;
        padding: 100px 0;        
        background-color: #fff;            
    }
    .mat_khau>div, .mat_khau>form{
    	width: 350px;
    	margin: 0 auto;
    	background-color: #fff;
        padding: 20px;
        border: 1px solid var(--color2);
        border-radius: 20px;
        box-shadow: 10px 10px var(--color2);
    }
    .mat_khau h2 {
        font-weight: bold;
        color: var(--main-color);
        margin-bottom: 20px;
        cursor: default;
        text-align: center;
    }
    .mat_khau input {
        width: 100%;
        height: 30px;
        border: 1px solid #dcdddd;
        border-radius: 10px;
        outline: none;
        box-sizing: border-box;
        padding: 0px 20px;
        margin-bottom: 20px;
    }
    .mat_khau input[type=submit] {
        background-color: var(--main-color);
        color: white;
        cursor: pointer;
    }
    .mat_khau input[type=submit]:hover{
        background-color: var(--color2);
        transition: 0.1s all ease;
    }
    .mat_khau .thong_bao, .mat_khau .error{
        color: red;
        margin-bottom: 10px;
        text-align: center;
    }
</style>

<div id="mkhau" class="mat_khau">
    <div>
        <div id="load" class="hidden">
            <span class="fas fa-spinner xoay icon"> </span>
        </div>
    	<h2>QUÊN MẬT KHẨU</h2>
	    <input type="text" id="email" placeholder="Email (Nhập đúng Email của bạn)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required autocomplete="off">
        <div id="submit1">
            <p id="error1" class="error"></p>
            <input type="submit" value="GỬI" onclick="kt_email()">
        </div>
	    <div id="ma_xn" class="hidden">
	    	<p class="thong_bao">
	    		Một mã xác nhận đã được gửi đến email của bạn, vui lòng kiểm tra và nhập vào ô dưới.
	    	</p>
	    	<input type="text" id="mxn" placeholder="Nhập mã xác nhận" pattern=".{5,}" required autocomplete="off">
            <p id="error2" class="error"></p>
	    	<input type="submit" value="GỬI" onclick="kt_ma_xn()">
	    </div>
    </div>
</div>

<script type="text/javascript">
    $('#email').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            kt_email();
        }
    });
    $('#mxn').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            kt_ma_xn();
        }
    });
</script>
@endsection