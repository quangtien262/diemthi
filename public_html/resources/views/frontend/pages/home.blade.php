@extends('layouts.frontend')

@section('content')

<div class="container">
    <div class='main_content'>
        <a href="{{ $banner->link or '' }}" target="_new">
            <img class="banner" src="{{ $banner->image or '' }}" alt="{{ $banner->name }}" />
        </a>


        <div class="row main-icon-banner" id="main-tab">
            <img onclick="openTab('thpt')" class="icon icon-thpt" src="/frontend/image/icon_diemthi_thpt.png">
            <img onclick="openTab('10')" class="icon icon-10" src="/frontend/image/icon-diem-thi-tuyen-sinh.png">
            <img onclick="openTab('news')" class="icon icon-news" src="/frontend/image/icon-tin-tuc.png">
        </div>
        <div class="row main-form-search">
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
        <div class="row">
            <div class="content-search-thpt diem-tot-nghiep">
                @include('frontend.pages.searchThpt')
            </div>
            <div class="content-search-ts10 _hidden tuyen-sinh-lop10">
                @include('frontend.pages.search10')
            </div>
            <div class="row main-ad01">
                {!! $adTop->name !!}
            </div>
            <div class="row">
                <h2 class="tinmoi">Tin mới</h2>
            </div>
            <div class="row">
                <div id="content-left" class="col-xs-12 col-sm-6 col-md-8">
                    @php $idx = 0; @endphp
                    @foreach($news as $index => $n)
                    @php $idx++; @endphp
                    @if($idx == 1)
                    <div class="row">
                        <div class="col-xs-6 news-item">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">
                                <h3>{{ $n->name }}</h3>
                            </a>
                            <p>{{ $n->description }}</p>
                        </div>
                        @elseif($idx == 2)
                        <div class="col-xs-6 news-item">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">
                                <h3>{{ $n->name }}</h3>
                            </a>
                            <p>{{ $n->description }}</p>
                        </div>
                    </div>
                    @elseif($idx == 3)
                    <div class="row">
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">
                                <h3>{{ $n->name }}</h3>
                            </a>
                        </div>
                        @elseif($idx == 4)
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">
                                <h3>{{ $n->name }}</h3>
                            </a>
                        </div>
                        @elseif($idx == 5)
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="{{ $n->link }}">
                                <img class="img-responsive" title="{{ $n->name }}" alt="{{ $n->name }}"
                                    src="{{ $n->image }}">
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
                {!! $ad->name !!}
                @endforeach
            </div>
        </div>

        <div class="row main-ad01">
            {!! $adBot->name !!}
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