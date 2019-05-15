@extends('layouts.frontend') 
@section('content')

<div class="cleafix"></div>
<div class="row" class="form_html">
    <div class="col-md-8">
        <h4>Quý khách vui lòng nhập đầy đủ các thông tin liên hệ theo mẫu dưới đây</h4>
    </div>
    <form action="">
        <div class="col-md-6">
            <br>
            <input class="form-control" type="text" name="firstname" placeholder="Họ và tên" required=""/>
            <br>
            <input class="form-control" type="text" name="lastname" placeholder="Số điện thoại" required=""/>
            <br>
            <input class="form-control" type="text" name="lastname" placeholder="email" required=""/>
            <br>
            <input class="form-control" type="text" name="lastname" placeholder="Địa chỉ" required=""/>
            <br>
            <textarea class="form-control" type="text" name="lastname" placeholder="Nội dung" required=""></textarea>
            <br>
            <input style='margin-top: 10px;' class="btn btn-primary" type="submit" value="Gửi liên hệ">
        </div>
    </form>
    <br>
</div>
</div>
</div>

</div>



</div>
@endsection