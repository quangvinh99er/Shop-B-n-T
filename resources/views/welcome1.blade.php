<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{$meta_desc}}">
    <meta name="keywords" content="{{$meta_keywords}}" />
    <meta name="robots" content="INDEX, FOLLOW" />
    <meta name="author" content="">
    <link rel="canonical" href="{{$url_canonical}}" />
    <link rel="icon" type="image/x-icon" href="" />
    <title>{{$meta_title}}</title>
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('frontend/css/sweetalert.css')}}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('frontend/image/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('frontend/image/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('frontend/image/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('frontend/image/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('frontend/image/ico/apple-touch-icon-57-precomposed.png')}}">
    <style>
    .intro:hover {
        background-color: #F9F9F9;
    }

    </style>
</head>
<!--/head-->

<body>


    <header id="header">
        <!--header-->
        <div class="header_top">
            <!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><img style="width: 20px;
  height: 20px; padding:1px" src="{{asset('frontend/image/icon-phone.png')}}">0348735656</a></li>
                                <li><a href="#"><img style="width: 20px;
  height: 20px; padding:1px" src="{{asset('frontend/image/icon-gmail.png')}}">datnguyen06121998@gmail.com</a></li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li>

                                    <a href="#"><img style="width: 20px;
  height: 20px;margin-top:8px" src="{{asset('frontend/image/fb.jpg')}}"></a>
                                </li>
                                <li><a href="#"><img style="width: 39px;
  height: 39px; margin-top:-1px" src="{{asset('frontend/image/icon-ins.png')}}"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header_top-->

        <div class="header-middle">
            <!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="trangchu"><img style="width: 1140px" , height="400px" src="{{asset('frontend/image/banner_top.jpg')}}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">

                        </div>
                    </div>

                    <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav" style="margin-top: 400px;margin-left: 10px;
                            font-size: 10px; ">
                                <?php
                                $shipping_id = Session::get('shipping_id');
                                $customer_id = Session::get('customer_id');
                                if ($customer_id != NULL && $shipping_id == NULL) {
                                ?>
                                    <li><a style="font-size: 18px; color: #3366CC" href="{{URL::to('/login-checkout')}}">
                                            {{__('Thanh toán')}}</a>
                                    </li>

                                <?php
                                } else {

                                ?>
                                    <li><a style="font-size: 18px; color: #3366CC "  href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>
                                            {{__('Thanh toán')}}</a> </li>
                                <?php
                                }
                                ?>


                                <li><a style="font-size: 18px; color: #3366CC"  href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i>
                                        {{__('Giỏ hàng')}}</a>
                                </li>
                                <?php
                                $customer_id = Session::get('customer_id');
                                $customer_name = Session::get('customer_name');
                                // var_dump($customer_name); 
                                if ($customer_id != NULL) {
                                ?>
                                    <li ><a  style="font-size: 18px; color: #3366CC"href="{{URL::to('/change-password')}}">Đổi mật khẩu</a></li>

                                    <li><a style="font-size: 18px; color: #3366CC" href="{{URL::to('/logout-checkout')}}"><?php echo $customer_name ?><i class="fa fa-lock"></i> {{__('Đăng xuất')}}</a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li><a style="font-size: 18px; color: #3366CC" href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>{{__('Đăng nhập')}}</a>
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-middle-->

        <div class="header-bottom">
            <!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li class="intro"><a href="{{URL::to('/trangchu')}}" class="active" style="color: #3366CC">{{__('Trang chủ')}}</a></li>

                                <li class="intro" ><a href="{{URL::to('/tintuc')}}" style="color: #3366CC">{{__('Tin tức ')}}</i></a>
                                
                                </li>
                                
                                </li>
                                <li class="intro"><a href="{{URL::to('/gio-hang')}}" style="color: #3366CC">{{__('Giỏ hàng')}}</a></li>
                                <li class="intro"><a href="contact" style="color: #3366CC">{{__('Liên hệ')}}</a></li>

                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="Tìm kiếm sản phẩm" />
                                <input type="submit" style="margin-top:0px; color:  #CCCCCC; background-color: #6600FF ;" name="search_item" class="btn btn-primary btn-sm" value="Tìm kiếm">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/header-bottom-->
    </header>
    <!--/header-->

    <section id="slider">
        <!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                       <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1 style="color: #6699CC">Huân Đạt Store</h1>
                                    <h2>Giảm giá cực sốc</h2>
                                    <p>Trả góp 0% lãi xuất</p>
                                    <p>Đặt hàng ngay bây giờ</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('frontend/image/Slidephone1.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span style="color: #6600CC">Huân Đạt Store</h1>
                                    <p>Thu gọn thế giới công nghệ trong Smartphone</p>
                                </div>

                                <div class="col-sm-6">
                                    <img src="{{asset('frontend/image/Slidephone2.jpg')}}" class="girl img-responsive" alt="" />

                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--/slider-->

    <section>
        <div class="container">
            <div class="row">
                

                <div class="col-sm-12 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>



    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        
        load_comment();

        function load_comment(){
            var product_id = $('.comment_product_id').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{url('/load-comment')}}",
              method:"POST",
              data:{product_id:product_id, _token:_token},
              success:function(data){
              
                $('#comment_show').html(data);
              }
            });
        }
        $('.send-comment').click(function(){
            var product_id = $('.comment_product_id').val();
            var comment_name = $('.comment_name').val();
            var comment_content = $('.comment_content').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
              url:"{{url('/send-comment')}}",
              method:"POST",
              data:{product_id:product_id,comment_name:comment_name,comment_content:comment_content, _token:_token},
              success:function(data){
                
                $('#notify_comment').html('<span class="text text-success">Thêm bình luận thành công, bình luận đang chờ duyệt</span>');
                load_comment();
                $('#notify_comment').fadeOut(9000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
            });
        });
    });
</script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.add-to-cart').click(function() {
                var id = $(this).data('id_product');
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();

                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        cart_product_qty: cart_product_qty,
                        _token: _token
                    },
                    success: function() {

                        swal({
                                title: "Đã thêm sản phẩm vào giỏ hàng",
                                text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                showCancelButton: true,
                                cancelButtonText: "Xem tiếp",
                                confirmButtonClass: "btn-success",
                                confirmButtonText: "Đi đến giỏ hàng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            });
        });
    </script>

<script type="text/javascript">
        $(document).ready(function(){
            $('.choose').on('change',function(){
            var action = $(this).attr('id');
            var ma_id = $(this).val();
            var _token = $('input[name="_token"]').val();
            var result = '';
           
            if(action=='city'){
                result = 'province';
            }else{
                result = 'wards';
            }
            $.ajax({
                url : '{{url('/select-delivery-home')}}',
                method: 'POST',
                data:{action:action,ma_id:ma_id,_token:_token},
                success:function(data){
                   $('#'+result).html(data);     
                }
            });
        });
        });
        </script>
         <script type="text/javascript">
        $(document).ready(function(){
            $('.calculate_delivery').click(function(){
                var matp = $('.city').val();
                var maqh = $('.province').val();
                var xaid = $('.wards').val();
                var _token = $('input[name="_token"]').val();
                if(matp == '' && maqh =='' && xaid ==''){
                    alert('Làm ơn chọn để tính phí vận chuyển');
                }else{
                    $.ajax({
                    url : '{{url('/calculate-fee')}}',
                    method: 'POST',
                    data:{matp:matp,maqh:maqh,xaid:xaid,_token:_token},
                    success:function(){
                       location.reload(); 
                    }
                    });
                } 
        });
    });
    </script>
</body>

</html>