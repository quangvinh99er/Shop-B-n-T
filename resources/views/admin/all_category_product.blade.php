@extends('admin_layout')
    @section('admin_content')
    <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      LIỆT KÊ DANH MỤC SẢN PHẨM
    </div>

    <div class="table-responsive">
    <?php
                  $message = Session::get('TEN');
                  if($message)
                  {
                echo '<span class="text-alert">',$message.'</span>' ;
                $message = Session::put('TEN', null);
                  }
                  ?>
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên danh mục</th>
            <th>Hiển thị</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          
          @foreach($all_category_product as $key => $cate_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $cate_pro ->category_name}}</td>
            <td><span class="text-ellipsis">
              <?php
              if($cate_pro->category_status==0){
              ?>
            <a href="{{URL::to('/unactive-category-product/'.$cate_pro ->category_id)}}"><span class= " fa-thumb-styling fa fa-thumbs-up"></span></a>
              <?php
              }else{
              ?>
                <a href="{{URL::to('/active-category-product/'.$cate_pro->category_id)}}"><span class=" fa-thumb-styling fa fa-thumbs-down"></span></a>
                <?php
              }
            ?>
            </span></td>
            <td>
              <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id )}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này không?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id )}}" class="active styling-edit" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
    
  </div>
</div>
 @endsection