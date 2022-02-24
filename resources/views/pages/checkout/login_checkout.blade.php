@extends('welcome')
@section('content')


<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>{{__('Đăng nhập tài khoản')}}</h2>
						<form action="{{URL::to('/login')}}" method="POST">
						{{ csrf_field() }}
							<input type="text" name="email" placeholder="tài khoản" />
							<input type="password" name="password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								{{__('Nhớ mật khẩu')}}
							</span>
							@if (\Session::has('msg'))
								<span class="alert alert-danger">Session::get('msg') </span>
							@endif
							<button type="submit" class="btn btn-default">{{__('Đăng nhập')}}</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">{{__('hoặc')}}</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>{{__('Đăng kí')}}</h2>
                        <form action="{{URL::to('/add-customer')}}" method="POST">
                        {{ csrf_field()}}
                            <input type="text" name="customer_name" placeholder="Họ và tên"/>

							<input type="email" name="customer_email" placeholder="Địa chỉ email"/>
                            <input type="password" name="customer_password" placeholder="Mật khẩu"/>
                            <input type="text"  name="customer_phone"placeholder="Số điện thoại"/>

							<button type="submit" class="btn btn-default">{{__('Đăng kí')}}</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection