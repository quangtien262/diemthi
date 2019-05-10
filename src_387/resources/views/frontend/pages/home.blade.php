@extends('layouts.frontend')

@section('content')

<div class="row">
    <a href="{{ $banner->link or '' }}" target="_new">
        <img class="banner" src="{{ $banner->image or '' }}" alt="{{ $banner->name }}"/>
    </a>
</div>
<div class="row main-icon-banner">
    <a href=""><img src="/frontend/image/icon_diemthi_thpt.png"></a>
    <a href=""><img src="/frontend/image/icon-diem-thi-tuyen-sinh.png"></a>
    <a href=""><img src="/frontend/image/icon-tin-tuc.png"></a>
</div>
<div class="row main-form-search">
    <form method="GET" action="">
        <h2 id="search-title">Điểm thi tốt nghiệp THPT</h2>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control">
                    <option value="">Chọn cụm thi</option>
                </select>
            </div>
            <div class="col-md-6">
                <input name="sbd" class="form-control" value="{{ $_GET['sbd'] or '' }}" type="text" placeholder="Số báo danh" required />
            </div>
        </div>
        <div class="row text-center">
            <input type="submit" class="btn btn-tra-cuu" value="Tra cứu">
        </div>
    </form>
</div>
<div class="row">
    <div class="table-responsive">
        <br />
        <table class="table table-bordered">
            <thead>
                @if(isset($_GET['sbd']) && !empty($diemThiThpt)) 
                    <tr>
                        <th colspan="12" class="_success">
                            Tìm thấy <b class="_red">{{ $diemThiThpt->total() }}</b> kết quả cho số báo danh <b  class="_red">{{ $_GET['sbd'] }}</b>
                        </th>
                    </tr>
                @endif
                <tr>
                    <th colspan="2" class="text-center">Thí sinh</th>
                    <th colspan="3" class="text-center">Môn thi chính</th>
                    <th colspan="4" class="text-center">Bài khoa học tự nhiên</th>
                    <th colspan="4" class="text-center">Bài khoa học xã hội</th>
                </tr>
                <tr>
                    <th>#</th>
                    <th>Số báo danh</th>
                    <th>Toán</th>
                    <th>Ngữ văn</th>
                    <th>Ngoại ngữ</th>
                    <th>Vật lý</th>
                    <th>Hóa học</th>
                    <th>Sinh học</th>
                    <th>Điểm trung bình</th>
                    <th>Lịch sử</th>
                    <th>Địa lý</th>
                    <th>Giáo dục công dân</th>
                    <th>Điểm trung bình</th>
                </tr>
                @if(isset($_GET['sbd'])) 
                    @if(!empty($diemThiThpt))
                        @foreach($diemThiThpt as $idx => $diem)
                        <tr>
                            <td>{{ ($idx + 1) }}</td>
                            <td>{{ $diem->sobaodanh or '' }}</td>
                            <td>{{ $diem->toan or '0.00'  }}</td>
                            <td>{{ $diem->ngu_van or '0.00'  }}</td>
                            <td>{{ $diem->ngoai_ngu or '0.00'  }}</td>
                            <td>{{ $diem->vat_ly or '0.00'  }}</td>
                            <td>{{ $diem->hoa_hoc or '0.00'  }}</td>
                            <td>{{ $diem->sinh_hoc or '0.00' }}</td>
                            <td>{{ round((($diem->vat_ly + $diem->hoa_hoc + $diem->sinh_hoc)/3), 2) }}</td>
                            <td>{{ $diem->lich_su or '0.00'  or '0.00'  }}</td>
                            <td>{{ $diem->dia_ly or '0.00'  }}</td>
                            <td>{{ $diem->gdcd or '0.00'  }}</td>
                            <td>{{ round((($diem->lich_su + $diem->dia_ly + $diem->gdcd)/3), 2) }}</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td colspan="13">
                               {!! $diemThiThpt->appends($_GET)->render() !!} 
                            </td>
                        </tr>
                    @else
                    <tr>
                        <td colspan="13" class="text-center">
                            <br/>
                            <p><em>Không tìm thấy kết quả nào, vui lòng nhập lại số báo danh của bạn.</em></p>
                        </td>
                    </tr>
                    @endif
                @else
                <tr>
                    <td colspan="13" class="text-center">
                        <br/>
                        <p><em>Vui lòng nhập số báo danh ở trên để tìm kiếm điểm thi của bạn.</em></p>
                    </td>   
                </tr>
                @endif
                
            </thead>
        </table>
    </div>
    <div class="row main-ad01">
        <a href="{{ $adTop->link or '' }}" target="_new">
            <img class="ad01" src="{{ $adTop->image or '' }}" alt="{{ $adTop->name }}" title="{{ $adTop->name }}"/>
        </a>
    </div>
    <div class="row">
        <h2 class="tinmoi">Tin mới</h2>
    </div>
    <div class="row">
        <div id="content-left" class="col-xs-12 col-sm-6 col-md-8">
            <div class="row">
                <div class="col-xs-6 news-item">
                    <img class="img-responsive"
                        src="http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg">
                    <h3>Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận</h3>
                    <p>
                        Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm
                        trong công viên Cầu Giấy.
                    </p>
                </div>
                <div class="col-xs-6 news-item">
                    <img class="img-responsive"
                        src="http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg">
                    <h3>Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận</h3>
                    <p>
                        Theo kết quả được công bố, hơn 60% người dân được lấy ý kiến đồng thuận với việc xây bãi xe ngầm
                        trong công viên Cầu Giấy.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 news-item col-md-4">
                    <img class="img-responsive"
                        src="http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg">
                    <h3>Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận</h3>
                </div>
                <div class="col-xs-6 news-item col-md-4">
                    <img class="img-responsive"
                        src="http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg">
                    <h3>Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận</h3>
                </div>
                <div class="col-xs-6 news-item col-md-4">
                    <img class="img-responsive"
                        src="http://cdn.baogiaothong.vn/upload/images/2019-2/article_avatar_img/2019-05-09/20190314-094903-1552823154-width333height196-1557402044-width333height196.jpg">
                    <h3>Xây bãi xe ngầm trong công viên Cầu Giấy: Hơn 60% người dân đồng thuận</h3>
                </div>
            </div>
        </div>
        <div id="content-right" class="col-xs-6 news-item col-md-4">
            @foreach($adRight as $ad) 
                <a href="{{ $ad->link or ''}}" target="_new">
                    <img class="ad02" alt="{{ $ad->name }}" title="{{ $ad->name }}" src="{{ $ad->image }}" />
                </a>
            @endforeach
        </div>
    </div>

    <div class="row main-ad01">
        <img class="ad01" src="/frontend/image/quang-cao-01.png">
    </div>
    <div class="row menu-pho-diem">
        <b>Phổ điểm THPT</b>
        <a class="active" href="">Toán</a>
        <span>|</span>
        <a href="">Ngữ văn</a>
        <span>|</span>
        <a href="">Ngoại ngữ</a>
    </div>
    <div class="clean"><br /></div>
    <div class="row main-pho-diem">
        <div class="item-col-phodiem" style="height:100px"></div>
        <div class="item-col-phodiem" style="height:200px"></div>
        <div class="item-col-phodiem" style="height:300px"></div>
    </div>
</div>


@endsection