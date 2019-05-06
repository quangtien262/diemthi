<div class='content_product'>
                 <h2>Sản Phẩm</h2>
                 @foreach($product as $pro)
                 <div style=" padding-left:0px!important;margin-right:0px!important; padding-top: 25px;" class="col-xs-6 col-sm-3 content_sp">
                    <img style='width:270px;height:161px;' src='{{$pro->image}}'>
                    <div style="margin-top: 40px" class="ct">
                         <p>{!!$pro->summary!!}</p>
                         <b>    <a style="text-transform: uppercase" href='{{route('detailProduct',[app('ClassCommon')->formatText($pro->name),$pro->id])}}'> {{$pro->name}} ></a></b>
                    </div>
                   
                   </div>
                 @endforeach
                
                 </div>
<div class="clearfix visible-xs-block"></div>