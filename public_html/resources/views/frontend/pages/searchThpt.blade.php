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
            @if(!empty($data))
            @foreach($data as $idx => $diem)
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
    paginate('.content-search-thpt');
</script>