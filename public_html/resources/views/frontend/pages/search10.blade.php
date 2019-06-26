<div class="table-responsive">
        <br />
        <table class="table table-bordered">
            <thead>
                @if(isset($_GET['sbd']) && !empty($data))
                <tr>
                    <th colspan="12" class="_success">
                        Tìm thấy <b class="_red">{{ $data->total() }}</b> kết quả cho số báo danh <b
                            class="_red">{{ $_GET['sbd'] }}</b>
                    </th>
                </tr>
                @endif
                <tr>
                    <th>#</th>
                    <th>Số báo danh</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Điểm 1</th>
                    <th>Điểm 2</th>
                    <th>Điểm 3</th>
                    <th>Điểm 4</th>
                </tr>
                @if(isset($_GET['sbd']))
                @if(!empty($data))
                @foreach($data as $idx => $diem)
                <tr>
                    <td>{{ ($idx + 1) }}</td>
                    <td>{{ $diem->sbd or '' }}</td>
                    <td>{{ $diem->ho or '0.00'  }}</td>
                    <td>{{ $diem->ten or '0.00'  }}</td>
                    <td>{{ $diem->diem1 or '0.00'  }}</td>
                    <td>{{ $diem->diem2 or '0.00'  }}</td>
                    <td>{{ $diem->diem3 or '0.00'  }}</td>
                    <td>{{ $diem->diem4 or '0.00' }}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="13">
                        {!! $data->appends($_GET)->render() !!}
                    </td>
                </tr>
                @else
                <tr>
                    <td colspan="13" class="text-center">
                        <br />
                        <p><em>Không tìm thấy kết quả nào, vui lòng nhập lại số báo danh của bạn.</em></p>
                    </td>
                </tr>
                @endif
                @else
                <tr>
                    <td colspan="13" class="text-center">
                        <br />
                        <p><em>Vui lòng nhập số báo danh ở trên để tìm kiếm điểm thi của bạn.</em></p>
                    </td>
                </tr>
                @endif
            </thead>
        </table>
    </div>
    <script>
        paginate('.content-search-ts10');
    </script>