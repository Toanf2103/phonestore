<form action="{{ route('doi_mk') }}" method="POST">
	@csrf
	<h2>ĐỔI MẬT KHẨU</h2>
	<input type="hidden" name="email" value="{{ isset($email) ? $email : '' }}">
	<input type="password" class="{{ Session('id')!=null ? '' : 'hidden' }}" name="password_old" placeholder="Mật khẩu cũ" autocomplete="off">
	<input type="password" name="password" placeholder="Mật khẩu mới" required autocomplete="off">
	<input type="password" name="password_kt" placeholder="Xác nhận mật khẩu mới" required autocomplete="off">
	<p class="error">{{ isset($error) ? $error : '' }}</p>
	<input type="submit" value="ĐỔI">
</form>