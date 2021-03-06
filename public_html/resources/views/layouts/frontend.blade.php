
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>{{ $config->seo_title  or 'Báo giao thông'}}</title>
    <meta name="description" content="{{ $config->seo_description or 'Báo giao thông'}}">
    <meta name="keyword" content="{{ $config->seo_keyword or 'Báo giao thông'}}">

    @include('frontend.element.layout.stylesheet')
    @include('frontend.element.layout.script')
</head>

<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    @include('frontend.element.layout.header2')

            @yield('content')
        
    <div style="margin-top: 70px;background:#f2f2f2;" class="footer">
        @if($agent->isMobile())
            @include('frontend.element.layout.footerMobile')
        @else
            @include('frontend.element.layout.footer')
        @endif
    </div>
</body>

</html>