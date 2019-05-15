


<?php $__env->startSection('script'); ?>

    <script>
        var options = {
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
            };
    </script>

    <?php echo $__env->make('backend.element.laravelFileManagerScript', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <script>
        //upload multiple images
        var fileNames = [];
        function readFile() {
            
            if (this.files) {
                let length = this.files.length;
                for(i = 0; i < length; i++) {
                    this.files[i];
                    if(fileNames.indexOf(this.files[i].name) >= 0) {
                        continue;
                    }
                    fileNames.push(this.files[i].name);
                    var FR= new FileReader();
                    FR.addEventListener("load", function(e) {
                        let htmlImage = '<div class="item-images">' +
                                '<img src="' + e.target.result + '"/>' +
                                '<textarea class="_hidden" name="_images[]">'+e.target.result+'</textarea>' +
                                '<input type="hidden" value="base64" name="_images_type[]"/>' +
                            '</div>';
                        document.getElementById("result_up_images").innerHTML += htmlImage;
                    }); 
                    FR.readAsDataURL( this.files[i] );
                }
            }
        }
        if(document.getElementById("images")) {
            document.getElementById("images").addEventListener("change", readFile);
        }
        
        //End upload multiple images


        CKEDITOR.replace('ckeditor', options);
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-md-12">
                           
                        <form class="form-validate form-horizontal" id="form-tables" method="post" action="<?php echo e(\Request::url()); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <fieldset class="b0">
                                <legend>
                                    <?php echo e($table->display_name); ?>

                                    <a class="btn btn-default" style="float: right" type="button" data-dismiss="modal" aria-label="Close">
                                        <i class="ion-arrow-left-a"></i>
                                        Back
                                    </a>
                                    <?php if(!empty($tableId)): ?>
                                    <button class="btn btn-primary" style="float: right" type="submit" name="add_table">
                                        <i class="ion-chevron-down"></i>
                                        Cập nhật
                                    </button>
                                    <?php else: ?>
                                    <button class="btn btn-primary" style="float: right" type="submit" name="edit_table">
                                        <i class="ion-plus-circled"></i>
                                        Thêm mới
                                    </button>
                                    <?php endif; ?>
                                </legend>
                            </fieldset>
                            <fieldset class="b0">
                                <div class="row">
                                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($col->edit == 1): ?>
                                            <?php echo $__env->make('backend.element.formColumn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3 center-block">
                                        <br/>
                                        <?php if(empty($dataId)): ?>
                                            <button class="btn btn-primary" type="submit" name="add_field">Thêm mới</button>
                                        <?php else: ?>
                                            <button class="btn btn-primary" type="submit" name="edit_field">Cập nhật</button>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </fieldset>
                        </form> 
                        <hr>
                        <!-- END panel-->
                    </div>
                </div>
                <!-- END row-->
            </div>
        </div>
    </div>
        
<form class="form-nestable" method="POST" action="<?php echo e(route('sortOrderRows', [LANDING_PAGE_ITEM_ID])); ?>">
        <?php echo e(csrf_field()); ?>

        <textarea style="display: none" name="ids" class="well" id="nestable-output"></textarea>
    </form>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.'.$layout, array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>