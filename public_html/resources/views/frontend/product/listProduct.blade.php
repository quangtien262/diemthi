@extends('layouts.frontend') 
@section('content')

<div class="row">
    @foreach($listProduct as $key=> $listpro )
    <div class=" col-sm-3 ct_pro">
        <div class="thumbnail">
            <img src='{{$listpro->image}}'>
        </div>

        <div style="margin-top: 40px">
            <b>
                    <a style="text-transform: uppercase" 
                    href='{{route('detailProduct',[app('ClassCommon')->formatText($listpro->name),$listpro->id])}}'>
                     {{$listpro->name}}
                    </a>
                </b>
            <p>{!!$listpro->summary!!}</p>

        </div>
    </div>

    @if($key == 3) @endif @endforeach
</div>
<div class="row">
    {!! $listProduct->render() !!}
</div>
@endsection

