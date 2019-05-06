@extends('layouts.backend')

@section('script')
    
@endsection

@section('content')

<section>
        
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="panel-heading">
                    <form action="" method="get">
                        <div class="row">
                            @php $isSearch = false; @endphp
                            @if(!empty($columns))
                                @foreach($columns as $col)
                                    @if($col->add2search == 1)
                                        @php $isSearch = true; @endphp
                                        @include('backend.element.formSearchColumn')
                                    @endif
                                @endforeach
                            @endif
                        </div>
                        <div class="clean"><hr/></div>
                    </form>
                    <div class="row">
                    @if($isSearch)
                        <button type="submit" class="btn btn-primary _left" style="margin-left: 10px">
                            <i class="ion-ios-search-strong"></i>
                            Tìm kiếm
                        </button>
                    @endif
                        <a class="btn btn-primary _right" href="{{ route('formRow', [$tableId, 0]) }}" style="margin-right: 10px">
                            <i class="ion-plus-circled"></i>
                            Thêm mới
                        </a>
                        <a target="_new" class="btn btn-primary _right" href="{{ route('export2Excel', [$tableId]) }}" style="margin-right: 10px">
                            <i class="ion-arrow-up-a"></i>
                            Xuất ra file excel
                        </a>
                        <a class="btn btn-primary _right" onclick="loadDataPopup('{{ route('import2Excel', [$tableId]) }}')" data-toggle="modal" data-target="#myModal" style="margin-right: 10px">
                            <i class="ion-arrow-down-a"></i>
                            Nhập từ file excel
                        </a>
                    </div>
                </div>
                <table class="table-datatable table table-striped table table-bordered mv-lg">
                    <thead>
                        <tr>
                            <th>STT</th>
                            @foreach($columns as $col)
                                @if($col->show_in_list == 1)
                                    <th>{{ $col->display_name }}</th>
                                @endif
                            @endforeach
                            <th class="sort-numeric">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($datas as $index => $data)
                        <tr class="gradeX">
                            <td>{{ $index + 1 }}</td>
                            @foreach($columns as $col)
                                @if($col->show_in_list == 1)
                                    <td>
                                        @if(in_array($col->type_edit, ['image_laravel', 'images_laravel', 'image'. 'images']))
                                            <img style="width:70px" src="{{ $data[$col->name] }}"/>
                                        @else
                                            @if($col->fast_edit == '1')
                                                <a class="editable-text"
                                                    data-url="{{ route('editCurrentColumn', [$col->name, $tableId, $data['id']]) }}"
                                                    data-type="text" data-pk="1" 
                                                    data-title="{{ $col->name }}" >
                                                    {{ $data[$col->name] }}
                                                </a>
                                            @else
                                            {{ $data[$col->name] }}
                                            @endif
                                        @endif
                                    </td>
                                @endif
                            @endforeach
                            <td>
                                @if($table->form_data_type == 1)
                                    <a href="{{ route('formRow', [$tableId, $data['id']]) }}" class="btn btn-sm btn-success">
                                        <i class="ion-edit"></i> Sửa
                                    </a>
                                @else 
                                    <a onclick="loadDataPopup('{{ route('formRow', [$tableId, $data['id']]) }}')" data-toggle="modal" data-target=".bs-modal-lg" class="btn btn-sm btn-success">
                                        <i class="ion-edit"></i> Sửa
                                    </a>
                                @endif
                                <a href="{{ route('deleteRow', [$tableId, $data['id']]) }}" class="btn btn-sm btn-default">
                                    <i class="ion-trash-a"></i>
                                    Xoá
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="table-datatable table table-striped table-hover mv-lg">
                    <tr>
                        <td>{!! $dataQuery->render() !!}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

@endsection
