@extends('layouts.frontend')

@section('content')


<div class="row">
    @foreach($listnews as $list)
   
    <div class='col-md-6 list_news'>
        <div class='col-md-4'>
            <div class='thumbnail'>
                <img src='{{$list->image}}'>
            </div>
             
        </div>
        <div class='col-md-8'>
            <div class=''>
                <a href='{{route('detailNews',[app('ClassCommon')->formatText($list->title),$list->id])}}'>{{$list->title}}</a>
            </div>
            <div class=''>
                <p>
                    {!!$list->summary!!} 
                     
                </p>
            </div>
            
        </div>
     </div>
    
          
    @endforeach
    
    
</div>


@endsection

