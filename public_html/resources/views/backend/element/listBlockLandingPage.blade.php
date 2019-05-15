<section>
    <div class="container-fluid">
        <div class="card">
            <div class="card-heading">
                <div class="row">
                    <div class="js-nestable-action">
                        <button type="button" class="btn btn-primary btn-sm " onclick="submitForm('.loading', '.form-nestable', 'none')" style="margin-left: 10px">
                            <i class="ion-chevron-down"></i>
                            Cập nhật lại thứ tự block
                        </button>
                        <a onclick="loadDataPopup('{{ route('adminListBlock', [$dataId]) }}')" class="btn btn-sm btn-success " data-toggle="modal" data-target=".bs-modal-lg"
                            style="margin-right: 10px">
                            <i class="ion-plus-circled"></i>
                            Thêm mới block
                        </a>
                    </div>
                </div>
                <hr/>
                <div class="row loading"></div>
            </div>
            <div class="card-body">
                <input type="hidden" id="landingpage-id" value="{{ $dataId or 0 }}" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="dd" id="nestable">
                            {!! app('ClassTables')->getHtmlListDragDrop(app('ClassTables')->getTableByName('landing_page_item'), 0,['landing_page_id' => $dataId], 'landingPage'); !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>