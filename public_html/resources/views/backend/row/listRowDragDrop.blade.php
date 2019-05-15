@extends('layouts.backend')

@section('content')

    <section>
        <div class="container-fluid">
            <div class="card">
                <div class="card-heading">
                    <div class="row">
                            <div class="js-nestable-action">
                                <a data-action="expand-all" class="btn btn-default btn-sm mr-sm">
                                    <i class="ion-arrow-down-a"></i>
                                    Mở rộng
                                </a>
                                <a data-action="collapse-all" class="btn btn-default btn-sm">
                                    <i class="ion-arrow-up-a"></i>
                                    Thu gọn
                                </a>
                                <button type="submit" 
                                        class="btn btn-primary btn-sm "
                                        onclick="submitForm('.loading', '.form-nestable', 'none')" 
                                        style="margin-left: 10px">
                                    <i class="ion-chevron-down"></i>
                                    Cập nhật lại thứ tự
                                </button>
                                <a class="btn btn-sm btn-success " href="{{ route('formRow', [$tableId, 0]) }}" style="margin-right: 10px">
                                    <i class="ion-plus-circled"></i>
                                    Thêm mới
                                </a>
                            </div>
                        </div>
                    <hr/>
                    <div class="row loading"></div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dd" id="nestable">
                                {!! $htmlListDragDrop !!}
                            </div>
                            <form class="form-nestable" method="POST" action="{{ route('sortOrderRows', [$tableId]) }}">
                                {{ csrf_field()}}
                                <textarea style="display: none" name="ids" class="well" id="nestable-output"></textarea>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection