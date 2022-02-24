<!DOCTYPE html>
<head>
<title>{{__('Chào mừng bạn đến với trang Admin')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="backend/css/style.css" rel='stylesheet' type='text/css' />
<link href="backend/css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="backend/css/font.css" type="text/css"/>
<link href="backend/css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

</head>
<body style="background: #BDBDBD url(frontend/image/bg.jpg) " >


<div class="log-w3">
<div class="w3layouts-main" >
	<h2 style="color: #0099CC">{{__('Đăng Nhập')}}</h2>
	<?php
	$message = Session::get('message');
	if($message)
	{
		echo '<span class="text-alert">',$message.'</span>' ;
		$message = Session::put('message', null);
	}
	?>
		<form action="{{URL::to('/admin-dashboard')}}" method="post">
			{{ csrf_field() }}
			<input type="text" class="ggg" name="admin_email" placeholder="E-mail" required="">
			<input type="password" class="ggg" name="admin_password" placeholder="Password" required="">
			<!-- <span><input type="checkbox" />Remember Me</span> -->
			<!-- <h6><a href="#">Quên mật khẩu?</a></h6> -->
				<div class="clearfix"></div>
				<input style="background-color: #3366FF" type="submit" value="Đăng nhập" name="login">
		</form>
		<!-- <p>Don't Have an Account ?<a href="registration.html">Create an account</a></p> -->
</div>
</div>
<script src="backend/js/bootstrap.js"></script>
<script src="backend/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="backend/js/scripts.js"></script>
<script src="backend/js/jquery.slimscroll.js"></script>
<script src="backend/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>