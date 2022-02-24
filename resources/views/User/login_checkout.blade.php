<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>{{__('Đăng nhập Website')}}</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="{{asset('frontend/css/login.css')}}" type="text/css" media="all" /> <!-- Style-CSS --> 
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- online-fonts -->
<!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet"> -->
<!-- //online-fonts -->
</head>
<body>
<!-- main -->
<div class="center-container">
	<!--header-->
	<div class="header-w3l">
		<h1>{{__('Đăng nhập mua hàng')}}</h1>
	</div>
	<!--//header-->
	<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
			</div>
			<div class="arlet" style="color: #fff;">
			@include('message')
			</div>
			<form action="{{URL::to('/login')}}" method="post">
			{{csrf_field()}}
				<div class="pom-agile">
					<input placeholder="E-mail" name="account_name" class="user" type="email" required="">
					<span class="icon1"><i class="fa fa-user" aria-hidden="true" style="color: #3366CC"></i></span>
				</div>
				<div class="pom-agile">
					<input  placeholder="Mật khẩu" name="account_password" class="pass" type="password" required="">
					<span class="icon2"><i class="fa fa-unlock" aria-hidden="true" style="color: #3366CC"></i></span>
				</div>
				@if(session('alert'))
					<section class="btn btn-success">{{session('alert')}}</section>
				@endif
				<div class="sub-w3l">
					<h6><a href="{{URL::to('/sign_up')}}">{{__('Đăng kí')}}</h6>
					<div class="right-w3l">
						<input type="submit"style="background-color: #3366CC" value="ĐĂNG NHẬP">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!--//main-->

</div>
</body>
</html>