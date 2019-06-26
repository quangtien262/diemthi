<div class="row menu-pho-diem">
    <b>Phổ điểm THPT</b>
    @foreach($phodiemCate as $idx => $pd)
        @if($idx == 0) 
            <script>
                 phodiemId = '{{ $pd->id or 0 }}';
            </script>
        @endif
        <a id="cate-phodiem{{ $pd->id or 0 }}" class="{{ $idx == 0 ? 'active':'' }} _point cate-phodiem" onclick="phodiem({{ $pd->id or 0 }})">{{ $pd->name or '' }}</a>
        <span>|</span>
    @endforeach
</div>