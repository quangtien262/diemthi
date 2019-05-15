<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Admin Template">
        <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
        <title>@yield('title')</title>
        <!-- Vendor styles-->
        <!-- build:css(../app) css/vendor.css-->
        <!-- Animate.CSS-->
        @include('backend.layouts.css')
    </head>
    <body>
        <div class="layout-container">
            <div class="page-container bg-blue-grey-900">
                <div class="container-full">
                    <div class="container container-xs">
                        <img src="/backend/img/logo.png" class="mv-lg block-center img-responsive thumb64">
                        <form class="form-horizontal card b0" role="form" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <div class="card-offset pb0">
                                <div class="card-offset-item text-right hidden">
                                    <div class="btn btn-success btn-circle btn-lg">
                                        <em class="ion-checkmark-round"></em>
                                    </div>
                                </div>
                            </div>
                            <div class="card-heading">
                                <div class="card-title text-center">Login</div>
                            </div>
                            @if(isset($message))
                                <div class="card-body">
                                    <p class="invalid">
                                        {{ $message }}
                                    </p>
                                </div>
                            @endif
                            <div class="card-body">
                                <div class="mda-form-group mda-input-group">
                                    <div class="mda-form-control">
                                        <input value="{{ old('username') }}" 
                                               name="username" 
                                               class="form-control">
                                        <div class="mda-form-control-line"></div>
                                        <label>Tên đăng nhập</label>
                                    </div><span class="mda-input-group-addon"><em class="ion-ios-email-outline icon-lg"></em></span>
                                </div>
                                <div class="mda-form-group mda-input-group">
                                    <div class="mda-form-control">
                                        <input type="password" 
                                               name="password" 
                                               class="form-control">
                                        <div class="mda-form-control-line"></div>
                                        <label>Mật khẩu</label>
                                    </div><span class="mda-input-group-addon"><em class="ion-ios-locked-outline icon-lg"></em></span>
                                </div>
                            </div>
                            <input type="submit" 
                                   value="Đăng nhập"
                                   class="btn btn-primary btn-flat"/>
                        </form>
                        <div class="text-center text-sm">
                            <!--<a href="recover.html" class="text-inherit">Bạn quên mật khẩu?</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('backend.layouts.script')
    </body>
</html>
