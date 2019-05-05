@extends('layouts.frontend')

@section('content')

@include('frontend.element.slide')
<!--start content_product-->
@include('frontend.element.product')
<!--end content_product -->

@include('frontend.element.image')
<!--start content_news-->
@include('frontend.element.news')
<!--end content_news -->


@endsection

