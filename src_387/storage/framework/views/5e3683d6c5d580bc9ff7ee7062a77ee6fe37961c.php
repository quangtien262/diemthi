<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="myModalLabel">Nhập dữ liệu từ file Excel</h4>
</div>
<div class="modal-body">
    <div class="card">
        <form id="form-register" action="<?php echo e(route('import2Excel', [$tableId])); ?>" name="registerForm" novalidate=""
            class="form-validate form-edit" method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <div class="card-body">
                <div class="tab-content">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mda-form-group mb">
                                <div class="mda-form-control">
                                    <input type="file" name="import" "="">
                                            <div class=" mda-form-control-line"></div>
                                <label>chọn file excel để import</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                    <div class="loading"></div>
                    <br>
                </div>
            </div>
    </div>
    </form>
</div>
</div>