@extends('layouts.frontend')

@section('content')


    <a href="{{ $banner->link or '' }}" target="_new">
        <img class="banner" src="{{ $banner->image or '' }}" alt="{{ $banner->name }}"/>
    </a>

<div class="row main-icon-banner">
    @if($agent->isMobile()) 
        <a href=""><img style="width:80px; margin-top:15px;" src="/frontend/image/icon_diemthi_thpt.png"></a>
        <a href=""><img style="width:80px; margin-top:15px" src="/frontend/image/icon-diem-thi-tuyen-sinh.png"></a>
        <a href=""><img style="width:80px; margin-top:15px" src="/frontend/image/icon-tin-tuc.png"></a>
    @else
        <a href=""><img src="/frontend/image/icon_diemthi_thpt.png"></a>
        <a href=""><img src="/frontend/image/icon-diem-thi-tuyen-sinh.png"></a>
        <a href=""><img src="/frontend/image/icon-tin-tuc.png"></a>
    @endif
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
            @php  $idx = 0;  @endphp
            @foreach($news as $n)
                @php  $idx++;  @endphp
                @if($idx == 1)
                <div class="row">
                    <div class="col-xs-6 news-item">
                        <a href="{{ $n->link }}">
                            <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}" src="{{ $n->image }}">
                            <h3>{{ $n->name }}</h3>
                        </a>
                        <p>{{ $n->description }}</p>
                    </div>
                @elseif($idx == 2)    
                    <div class="col-xs-6 news-item">
                        <a href="{{ $n->link }}">
                            <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}" src="{{ $n->image }}">
                            <h3>{{ $n->name }}</h3>
                        </a>
                        <p>{{ $n->description }}</p>
                    </div>
                </div>
                @elseif($idx == 3)
                <div class="row">
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="{{ $n->link }}">
                            <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}" src="{{ $n->image }}">
                            <h3>{{ $n->name }}</h3>
                        </a>
                    </div>
                @elseif($idx == 4)
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="{{ $n->link }}">
                            <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}" src="{{ $n->image }}">
                            <h3>{{ $n->name }}</h3>
                        </a>
                    </div> 
                @elseif($idx == 5)
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="{{ $n->link }}">
                            <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}" src="{{ $n->image }}">
                            <h3>{{ $n->name }}</h3>
                        </a>
                    </div>   
                </div>    
                @php $idx = 0; @endphp              
                @endif
            @endforeach

            @if($idx == 1 || $idx == 3 || $idx == 4) 
                </div>
            @endif
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
    <div class="clean"><br/></div>
    @if($agent->isMobile())
        @include('frontend.element.home.phodiemMobile')
    @else
        @include('frontend.element.home.phodiem')
    @endif
    
    </div>
</div>


@endsection