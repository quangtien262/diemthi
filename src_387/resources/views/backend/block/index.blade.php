<section>
    <div class="container-fluid">
        <div class="card">
            <div class="row">
                @foreach($blocks as $block)
                    <div class="col-xs-6 col-sm-3 _point">
                        <div class="card">
                            <div class="card-item" onclick="loadDataPopup('{{ route('adminEditBlock',[$landingPageId, $block->id, 0]) }}')">
                                <img src="{{ $block->image }}" alt="MaterialImg" class="fw img-responsive">
                                <div class="card-item-text text-right">{{ $block->name }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>