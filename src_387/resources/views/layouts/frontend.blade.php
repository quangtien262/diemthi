<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Demo</title>

    @include('frontend.element.layout.stylesheet')
    @include('frontend.element.layout.script')
</head>

<body cz-shortcut-listen="true">

    <!-- Fixed navbar -->
    @include('frontend.element.layout.header2')

    <div class="container">
        <!--start slide-->
        <div class='main_content'>
            @yield('content')
        </div>
        <div class="clearfix"></div>
    </div>
    <div style="margin-top: 70px;background:#f2f2f2;" class="footer">
        @include('frontend.element.layout.footer')
    </div>
</body>

</html>