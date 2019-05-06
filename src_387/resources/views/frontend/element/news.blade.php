<div class='content_news'>
                 <h2>Tin Tức</h2>
                 @foreach($news as $new)
                 <div style=" padding-left:0px!important;margin-right:0px!important; padding-top: 25px;" class="col-xs-6 col-sm-3 content_sp">
                    <img style='width:270px;height:161px;' src='{{$new->image}}'>
                    <div style="margin-top: 40px" class="ct">
                         <p>{!!$new->summary!!}</p>
                         <b> <a style="text-transform: uppercase" href='{{route('detailNews',[app('ClassCommon')->formatText($new->title),$new->id])}}'>{{$new->title}}</a></b>
                    </div>
                   
                   </div>
                 @endforeach
                
                 </div>