@extends('layouts.frontend') 
@section('content')


<div class='row'>
    <h1>{{ $detailNews->title }}</h1>
    <span>
        {!! $detailNews->content !!}
    </span>
</div>
<div class='col-md-3'>
    <div class='thumb'>
        <img src=''>
    </div>
</div>
@endsection