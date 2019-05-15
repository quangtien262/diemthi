

<?php $__env->startSection('script'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<section>
        
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="panel-heading">
                    <form action="" method="get">
                        <div class="row">
                            <?php  $isSearch = false;  ?>
                            <?php if(!empty($columns)): ?>
                                <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($col->add2search == 1): ?>
                                        <?php  $isSearch = true;  ?>
                                        <?php echo $__env->make('backend.element.formSearchColumn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                        <div class="clean"><hr/></div>
                    </form>
                    <div class="row">
                    <?php if($isSearch): ?>
                        <button type="submit" class="btn btn-primary _left" style="margin-left: 10px">
                            <i class="ion-ios-search-strong"></i>
                            Tìm kiếm
                        </button>
                    <?php endif; ?>
                        <a class="btn btn-primary _right" href="<?php echo e(route('formRow', [$tableId, 0])); ?>" style="margin-right: 10px">
                            <i class="ion-plus-circled"></i>
                            Thêm mới
                        </a>
                        <a target="_new" class="btn btn-primary _right" href="<?php echo e(route('export2Excel', [$tableId])); ?>" style="margin-right: 10px">
                            <i class="ion-arrow-up-a"></i>
                            Xuất ra file excel
                        </a>
                        <a class="btn btn-primary _right" onclick="loadDataPopup('<?php echo e(route('import2Excel', [$tableId])); ?>')" data-toggle="modal" data-target="#myModal" style="margin-right: 10px">
                            <i class="ion-arrow-down-a"></i>
                            Nhập từ file excel
                        </a>
                    </div>
                </div>
                <table class="table-datatable table table-striped table table-bordered mv-lg">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($col->show_in_list == 1): ?>
                                    <th><?php echo e($col->display_name); ?></th>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <th class="sort-numeric">Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="gradeX">
                            <td><?php echo e($index + 1); ?></td>
                            <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $col): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($col->show_in_list == 1): ?>
                                    <td>
                                        <?php if(in_array($col->type_edit, ['image_laravel', 'images_laravel', 'image'. 'images'])): ?>
                                            <img style="width:70px" src="<?php echo e($data[$col->name]); ?>"/>
                                        <?php else: ?>
                                            <?php if($col->fast_edit == '1'): ?>
                                                <a class="editable-text"
                                                    data-url="<?php echo e(route('editCurrentColumn', [$col->name, $tableId, $data['id']])); ?>"
                                                    data-type="text" data-pk="1" 
                                                    data-title="<?php echo e($col->name); ?>" >
                                                    <?php echo e($data[$col->name]); ?>

                                                </a>
                                            <?php else: ?>
                                            <?php echo e($data[$col->name]); ?>

                                            <?php endif; ?>
                                        <?php endif; ?>
                                    </td>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td>
                                <?php if($table->form_data_type == 1): ?>
                                    <a href="<?php echo e(route('formRow', [$tableId, $data['id']])); ?>" class="btn btn-sm btn-success">
                                        <i class="ion-edit"></i> Sửa
                                    </a>
                                <?php else: ?> 
                                    <a onclick="loadDataPopup('<?php echo e(route('formRow', [$tableId, $data['id']])); ?>')" data-toggle="modal" data-target=".bs-modal-lg" class="btn btn-sm btn-success">
                                        <i class="ion-edit"></i> Sửa
                                    </a>
                                <?php endif; ?>
                                <a href="<?php echo e(route('deleteRow', [$tableId, $data['id']])); ?>" class="btn btn-sm btn-default">
                                    <i class="ion-trash-a"></i>
                                    Xoá
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
                <table class="table-datatable table table-striped table-hover mv-lg">
                    <tr>
                        <td><?php echo $dataQuery->render(); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>