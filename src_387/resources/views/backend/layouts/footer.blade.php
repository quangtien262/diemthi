<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        
    </head>
    <body>
        <div class="header">
            <div class="menu_top">
                @include('Layouts.header')
            </div>
        </div>
        <div class="_container">
            <div class="main_content">
                <div class="content">
                    @yield('content')
                </div>
                <div class="footer">
                    @include('Layouts.footer')
                </div>
            </div>
        </div>
    </body>
</html>
