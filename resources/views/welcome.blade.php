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
                            <a href="trangchu"><img style="width: 1140px" , height="350px" src="{{asset('frontend/image/banner_top.jpg')}}" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">

                        </div>
                    </div>

                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav" style="margin-top: 400px;margin-left: 10px;
                            font-size: 10px;">
                                <?php
                                $shipping_id = Session::get('shipping_id');
                                $customer_id = Session::get('customer_id');
                                if ($customer_id != NULL && $shipping_id == NULL) {
                                ?>
                                    <li><a style="font-size: 18px; color:  #3366CC" href="{{URL::to('/login-checkout')}}">
                                            Thanh to??n</a>
                                    </li>

                                <?php
                                } else {

                                ?>
                                    <li><a style="font-size: 18px; color: #3366CC"  href="{{URL::to('/checkout')}}"><i class="fa fa-crosshairs"></i>
                                           Thanh to??n</a> </li>
                                <?php
                                }
                                ?>


                                <li><a style="font-size: 18px; color: #3366CC"  href="{{URL::to('/gio-hang')}}"><i class="fa fa-shopping-cart"></i>
                                        Gi??? h??ng</a>
                                </li>
                                <?php
                                $customer_id = Session::get('customer_id');
                                $customer_name = Session::get('customer_name');
                                // var_dump($customer_name); 
                                if ($customer_id != NULL) {
                                ?>
                                    <li ><a  style="font-size: 18px; color: #3366CC"href="{{URL::to('/change-password')}}">?????i m???t kh???u</a></li>

                                    <li><a style="font-size: 18px; color: #3366CC" href="{{URL::to('/logout-checkout')}}"><?php echo $customer_name ?><i class="fa fa-lock"></i>????ng xu???t</a>
                                    </li>
                                <?php
                                } else {
                                ?>
                                    <li><a style="font-size: 18px; color: #3366CC" href="{{URL::to('/login-checkout')}}"><i class="fa fa-lock"></i>????ng nh???p</a>
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
                                <li class="intro"><a href="{{URL::to('/trangchu')}}" style="color: #3366CC">Trang ch???</a></li>

                                <li class="intro"><a style="color: #3366CC" href="{{URL::to('/tintuc')}}">Tin t???c</i></a>
                                
                                </li>
                                <li class="intro"><a style="color: #3366CC" href="{{URL::to('/gio-hang')}}">Gi??? h??ng</a></li>
                                <li class="intro"><a style="color: #3366CC" href="contact">Li??n h???</a></li>

                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <form action="{{URL::to('/tim-kiem')}}" method="POST">
                            {{csrf_field()}}
                            <div class="search_box pull-right">
                                <input type="text" name="keywords_submit" placeholder="T??m ki???m s???n ph???m" />
                                <input type="submit" style="margin-top:0px; color:  #CCCCCC; background-color: #6600FF ;" name="search_item" class="btn btn-primary btn-sm" value="T??m ki???m">
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
                                    <h1 style="color: #6699CC">Hu??n ?????t Store</h1>
                                    <h2>Gi???m gi?? c???c s???c</h2>
                                    <p>Tr??? g??p 0% l??i xu???t</p>
                                    <p>?????t h??ng ngay b??y gi???</p>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{asset('frontend/image/Slidephone1.jpg')}}" class="girl img-responsive" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span style="color: #6600CC">Hu??n ?????t Store</h1>
                                    <p>Thu g???n th??? gi???i c??ng ngh??? trong Smartphone</p>
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
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2 style="color: #3366CC">Danh m???c s???n ph???m</h2>
                        <div class="panel-group category-products" id="accordian">
                            <!--category-productsr-->
                            @foreach($category as $key => $cate )

                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!--/category-products-->

                        <div class="brands_products">
                            <!--brands_products-->
                            <h2 style="color: #3366CC">Th????ng hi???u s???n ph???m</h2>
                            <div class="brands-name">
                                <ul class="nav nav-pills nav-stacked">
                                    @foreach($brand as $key => $brand )
                                    <li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}">
                                            <span class="pull-right"></span>{{$brand->brand_name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-9 padding-right">
                    @yield('content')
                </div>
            </div>
        </div>
        
    </section>
    <footer id="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-right">C???a h??ng b??n ??i???n tho???i di ?????ng <span><a target="_blank" href="" style="color: #3366CC">Hu??n ?????t Store</a></span></p>
                </div>
            </div>
        </div>

    </footer>

    <script src="{{asset('frontend/js/jquery.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{asset('frontend/js/price-range.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script>
    <!-- <script type="text/javascript">
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
                
                $('#notify_comment').html('<span class="text text-success">Th??m b??nh lu???n th??nh c??ng, b??nh lu???n ??ang ch??? duy???t</span>');
                load_comment();
                $('#notify_comment').fadeOut(9000);
                $('.comment_name').val('');
                $('.comment_content').val('');
              }
            });
        });
    });
</script> -->
 
<script type="text/javascript">
        $(document).ready(function() {
            $('.send_order').click(function() {
                swal({
                        title: "X??c nh???n ????n h??ng",
                        text: "????n h??ng s??? kh??ng ???????c ho??n tr??? khi ?????t,b???n c?? mu???n ?????t kh??ng?",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonClass: "btn-danger",
                        confirmButtonText: "Mua h??ng",

                        cancelButtonText: "????ng",
                        closeOnConfirm: false,
                        closeOnCancel: false
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            var shipping_email = $('.shipping_email').val();
                            var shipping_name = $('.shipping_name').val();
                            var shipping_address = $('.shipping_address').val();
                            var shipping_phone = $('.shipping_phone').val();
                            var shipping_notes = $('.shipping_notes').val();
                            var shipping_method = $('.payment_select').val();
                            var order_fee = $('.order_fee').val();
                            var order_coupon = $('.order_coupon').val();
                            var _token = $('input[name="_token"]').val();
                            if(shipping_method==0){
                                $.ajax({
                                url: '{{url('/payment-onlines')}}',
                                method: 'POST',
                                data: {
                                    shipping_email: shipping_email,
                                    shipping_name: shipping_name,
                                    shipping_address: shipping_address,
                                    shipping_phone: shipping_phone,
                                    shipping_notes: shipping_notes,
                                    _token: _token,
                                    order_fee: order_fee,
                                    order_coupon: order_coupon,
                                    shipping_method: shipping_method
                                },
                                success: function() {
                                    $(location).attr('href', 'thanh-toan');
                                }
                                });
                            }else{
                                $.ajax({
                                url: '{{url('/confirm-order')}}',
                                method: 'POST',
                                data: {
                                    shipping_email: shipping_email,
                                    shipping_name: shipping_name,
                                    shipping_address: shipping_address,
                                    shipping_phone: shipping_phone,
                                    shipping_notes: shipping_notes,
                                    _token: _token,
                                    order_fee: order_fee,
                                    order_coupon: order_coupon,
                                    shipping_method: shipping_method
                                },
                                success: function() {
                                    swal("????n h??ng", "????n h??ng c???a b???n ???? ???????c g???i th??nh c??ng", "success");
                                }
                            });
                            window.setTimeout(function() {
                                location.reload();
                            }, 3000);
                            }

                        } else {
                            swal("????ng", "????n h??ng ch??a ???????c g???i, l??m ??n ho??n t???t ????n h??ng", "error");
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
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                    alert('L??m ??n ?????t nh??? h??n ' + cart_product_quantity);
                }else{
                $.ajax({
                    url: '{{url('/add-cart-ajax')}}',
                    method: 'POST',
                    data: {
                        cart_product_id: cart_product_id,
                        cart_product_name: cart_product_name,
                        cart_product_image: cart_product_image,
                        cart_product_price: cart_product_price,
                        

                        cart_product_qty: cart_product_qty,
                        _token: _token,cart_product_quantity:cart_product_quantity
                    },
                    success: function() {

                        swal({
                                title: "???? th??m s???n ph???m v??o gi??? h??ng",
                                text: "B???n c?? th??? mua h??ng ti???p ho???c t???i gi??? h??ng ????? ti???n h??nh thanh to??n",
                                showCancelButton: true,
                                cancelButtonText: "Xem ti???p",
                                confirmButtonClass: "btn btn-success",
                                confirmButtonText: "??i ?????n gi??? h??ng",
                                closeOnConfirm: false
                            },
                            function() {
                                window.location.href = "{{url('/gio-hang')}}";
                            });

                    }

                });
            }
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
                    alert('L??m ??n ch???n ????? t??nh ph?? v???n chuy???n');
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