<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>TNT Shop | @yield('title')</title>
	<link rel="SHORTCUT ICON" href="{{asset('public/imgs/logo_title.png')}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('public/frontend/css/user_css.css')}}">
	<link rel="stylesheet" href="{{asset('public/frontend/css/user_css_respons.css')}}">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<!-- link file -->
	<script src="{{asset('public/frontend/js/user_js.js')}}"></script>
	<!-- link jQuery -->
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body onload="reset_capcha()">
	<!-- trang header -->
	@include("user.elements.header")
	<!-- trang body -->
	<div class="container">
		@include("user.elements.list_category")	
		<div class="content" id="content">
			@yield('content')
		</div>
	</div>
	<!-- trang footer -->
	@include("user.elements.footer")
	
</body>
</html>