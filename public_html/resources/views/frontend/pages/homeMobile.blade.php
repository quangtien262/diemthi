@extends('layouts.frontend')

@section('content')

<a href="{{ $banner->link or '' }}" target="_new">
    <img class="banner" src="{{ $banner->image or '' }}" alt="{{ $banner->name }}" />
</a>


<div class="container">
    <div class='main_content'>
        <div class="row main-icon-banner width100">
            <img onclick="openTab('thpt')" class="icon  icon-tab icon-thpt" src="/frontend/image/icon_diemthi_thpt.png">
            <img onclick="openTab('10')" class="icon  icon-tab icon-10"
                src="/frontend/image/icon-diem-thi-tuyen-sinh.png">
            <img onclick="openTab('news')" class="icon  icon-tab icon-news" src="/frontend/image/icon-tin-tuc.png">
        </div>
        <div class="row main-form-search width100">
            <form method="GET" action="{{ route('searchThpt') }}" class="diem-tot-nghiep" id="diem-tot-nghiep">
                <h2 id="search-title">Điểm thi tốt nghiệp THPT</h2>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control input-cum-thi">
                            <option value="">Chọn cụm thi</option>
                            {!! $htmlOptionCitys !!}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input name="sbd" class="form-control input-sbd" value="{{ $_GET['sbd'] or '' }}" type="text"
                            placeholder="Số báo danh" required />
                    </div>
                </div>
                <div class="row text-center">
                    <input onclick="search(this)" type="button" class="btn btn-tra-cuu" value="Tra cứu" formId="#diem-tot-nghiep"></button>
                </div>
            </form>

            <form method="GET" action="{{ route('search10') }}" class="tuyen-sinh-lop10 _hidden" id="tuyen-sinh-lop10">
                <h2 id="search-title">Điểm thi tuyển sinh lớp 10</h2>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control input-cum-thi">
                            <option value="">Chọn cụm thi</option>
                            {!! $htmlOptionCitys !!}
                        </select>
                    </div>
                    <div class="col-md-6">
                        <input name="sbd" class="form-control input-sbd" value="{{ $_GET['sbd'] or '' }}" type="text"
                            placeholder="Số báo danh" required />
                    </div>
                </div>
                <div class="row text-center">
                    <input onclick="search(this)" type="button" class="btn btn-tra-cuu" value="Tra cứu" formId="#tuyen-sinh-lop10"></button>
                </div>
            </form>
        </div>
        <div class="row width100">
            <div class="content-search-thpt diem-tot-nghiep">
                @include('frontend.pages.searchThpt')
            </div>
            <div class="content-search-ts10 _hidden tuyen-sinh-lop10">
                @include('frontend.pages.search10')
            </div>
            <div class="row main-ad01">
                {!! $adTop->code_mobile !!}
            </div>
            <div class="row">
                <h2 class="tinmoi">Tin mới</h2>
            </div>
            <div class="row main-item-news">
                <div id="content-left" class="col-xs-12 col-sm-6 col-md-8">
                    @php $idx = 0; @endphp
                    @foreach($news as $index => $n)
                    
                    <div class="row">
                        <div class="col-xs-6 news-item">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">

                            </a>
                        </div>
                        <div class="col-xs-6 news-item news-item02">
                            <h3>{{ $n->name }}</h3>
                        </div>
                    </div>
                    <div class="clean"><br/></div>
                    @endforeach

            </div>

            <div class="row main-ad01">&nbsp;</div>

            <div id="content-right" class="row">
                @foreach($adRight as $ad)
                {!! $ad->code_mobile !!}
                @endforeach
            </div>
        </div>

        <div class="row main-ad01">
            {!! $adBot->code_mobile !!}
        </div>
        
        @include('frontend.element.home.categoryPhodiem')
        <div class="clean"><br /></div>
        <div id="content-phodiem" class="row"></div>

    </div>

</div>
</div>
<div class="clearfix"></div>
</div>

@endsection