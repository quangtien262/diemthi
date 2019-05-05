@extends('layouts.frontend') 
@section('content')



<div class='row'>

    <div class='dt-content'>
        <div class='col-md-6'>
            <div class='thumb'>
                <img style='width:100%' src='{{$detaiproduct->image}}'>
            </div>
        </div>
        <div class='col-md-6'>
            <div class=''>
                <b style="font-size: 20px"><span>{{$detaiproduct->name}}</span> </b>
                <p>{{$detaiproduct->summary}}</p>


            </div>
        </div>
    </div>
    <br>
    <div class='main_dt'>
        <div class='col-xs-12'>
            <span>{!!$detaiproduct->content!!}</span>
        </div>
    </div>
    <br>

</div>

<br> 
@foreach($listProduct as $list)
<div style=" padding-left:0px!important;margin-right:0px!important; padding-top: 25px;" class="col-xs-6 col-sm-3 content_sp">
    <img style='width:270px;height:161px;' src='{{$list->image}}'>
    <div style="margin-top: 40px" class="ct">
        <b>
            <a style="text-transform: uppercase"
             href='{{route('detailProduct',[app('ClassCommon')->formatText($list->name),$list->id])}}'> 
             {{$list->name}}
             </a>
        </b>
    </div>

</div>
@endforeach

@endsection