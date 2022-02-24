@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details">
    <!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">
        <img src="{{URL::to('/uploads/product/'.$value->product_image)}}" alt="" />
        </div>
       

    </div>
    <div class="col-sm-7">
        <div class="product-information">
            <!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>Tên sản phẩm :{{$value->product_name}}</h2>
            <form action="{{URL::to('/save-cart')}}" method="POST">
                @csrf
                <input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">
                <input type="hidden" value="{{$value->product_quantity}}" class="cart_product_quantity_{{$value->product_id}}">

                <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">
                
                <span>
                    <!-- <span><strike>{{number_format($value->product_price,0,',','.').' VNĐ'}}</strike></span> -->
                    <span style="color: #3366CC">{{number_format($value->product_price,0,',','.').' VNĐ'}}</span>
                    <label>Số lượng:</label>
                    <input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}" value="1" />
                    <input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
                </span>
                <input type="button" value="Thêm giỏ hàng" style="background-color: #3366CC ; color: #f9f9f9"  class="btn btn-primary btn-sm add-to-cart" data-id_product="{{$value->product_id}}" name="add-to-cart">
            </form>
                <p><b>Tình trạng:</b> Còn hàng</p>
                <p><b>Điều kiện:</b> Mới 100% </p>
                <p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
                <p><b>Danh mục:</b> {{$value->category_name}}</p>
                <a href=""><img src="images/product-details/share.png" class="share img-responsive" alt="" /></a>
        </div>
        <!--/product-information-->
    </div>
</div>
<!--/product-details-->

<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="intro1" ><a href="#details" data-toggle="tab">Mô tả</a></li>
								<li class="intro1"><a href="#companyprofile" data-toggle="tab">Chi tiết sản phẩm</a></li>
							
								<li class="intro1"><a href="#reviews" data-toggle="tab"></a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
								<p>{!!$value->product_desc!!}</p>
								
							</div>
							
							<div class="tab-pane fade" id="companyprofile" >
								<p>{!!$value->product_content!!}</p>
								
						
							</div>
							
							
                </form>

    </div>
</div>
<!--/category-tab-->
@endforeach

@endsection