

<?php $__env->startSection('content'); ?>

<section>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <!-- START row-->
                <div class="row">
                    <div class="col-md-12">
                        <form class="form-validate form-horizontal" id="form-tables" method="post" action="<?php echo e(route('editTable', [$tableId])); ?>">
                            <?php echo e(csrf_field()); ?>

                            <fieldset class="b0">
                                <legend>
                                    Table Name
                                    <button class="btn btn-default" style="float: right" type="button">Back</button>
                                    <?php if(!empty($tableId)): ?>
                                    <button class="btn btn-primary" style="float: right" type="submit" name="add_table">Edit table</button>
                                    <?php else: ?>
                                    <button class="btn btn-primary" style="float: right" type="submit" name="edit_table">Add Table</button>
                                    <?php endif; ?>
                                </legend>
                            </fieldset>
                            <fieldset class="b0">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Tên bảng</label>
                                        <input value="<?php echo e(isset($table->name) ? $table->name : ''); ?>" class="form-control" id="id-source" type="text" name="table_name" placeholder=" Table name"/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Tên hiển thị</label>
                                        <input value="<?php echo e(isset($table->display_name) ? $table->display_name : ''); ?>" class="form-control" type="text" name="display_name" placeholder="Dislay name"/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Cho phép sửa bảng này không?</label>
                                        <select name="table_edit" class="form-control">
                                            <?php $__currentLoopData = unserialize(IS_EDIT); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyEdit => $valEdit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($table->is_edit) && $table->is_edit == $keyEdit ? 'selected="selected"':''); ?>  value="<?php echo e($keyEdit); ?>"><?php echo e($valEdit); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Kiểu show dữ liệu ở trang danh sách</label>
                                        <select name="table_type_show" class="form-control">
                                            <option value="">Type show</option>
                                            <?php $__currentLoopData = unserialize(TABLE_TYPE_SHOW); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyType => $valType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($table->type_show) && $table->type_show == $keyType ? 'selected="selected"':''); ?>  value="<?php echo e($keyType); ?>"><?php echo e($valType); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Số lượng Item trên 1 trang</label>
                                        <input value="<?php echo e(isset($table->count_item_of_page) ? $table->count_item_of_page : 30); ?>" class="form-control" type="number" name="count_item_of_page" placeholder=""/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Nhập tên model cần tạo</label>
                                        <input value="<?php echo e(isset($table->model_name) ? $table->model_name : ''); ?>" class="form-control" type="text" name="model_name" placeholder="Model name"/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Kiểu form nhập liệu</label>
                                        <select name="form_data_type" class="form-control">
                                            <?php $__currentLoopData = unserialize(FORM_DATA_TYPE); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $keyType => $valType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($table->form_data_type) && $table->form_data_type == $keyType ? 'selected="selected"':''); ?>  value="<?php echo e($keyType); ?>"><?php echo e($valType); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($table->export) && $table->export == 1 ? 'checked="checked"':''); ?> 
                                                value="1" type="checkbox" name="export" />
                                            Xuất ra file excel
                                        </label>
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($table->import) && $table->import == 1 ? 'checked="checked"':''); ?> 
                                                value="1" type="checkbox" name="import" />
                                            Nhập từ file excel
                                        </label>
                                    </div>
                                </div>

                            </fieldset>
                        </form> 
                        <?php if(!empty($tableId)): ?>
                        <fieldset class="b0">
                            <?php if(empty($_GET['column'])): ?>
                                <legend>Add Column</legend>
                            <?php else: ?>
                                <legend>Edit Column: <?php echo e(isset($column->name) ? $column->name : ''); ?></legend>
                            <?php endif; ?>
                        </fieldset>
                        <fieldset class="b0">
                            <form class="form-validate form-horizontal" id="form-column" method="post" action="<?php echo e(route('editColumn')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <input type="hidden" name="table_id" value="<?php echo e(isset($table->id) ? $table->id : 0); ?>"/>
                                <input type="hidden" name="column_id" value="<?php echo e(isset($_GET['column']) ? $_GET['column'] : 0); ?>"/>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Tên cột</label>
                                        <input value="<?php echo e(isset($column->name) ? $column->name : ''); ?>" class="form-control" type="text" name="column_name" placeholder="Column name" required=""/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Tên hiển thị</label>
                                        <input value="<?php echo e(isset($column->display_name) ? $column->display_name : ''); ?>" class="form-control" type="text" name="display_name" placeholder="Display name" required=""/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Kiểu dữ liệu</label>
                                        <select name="column_type" class="form-control" required="">
                                            <?php $__currentLoopData = unserialize(COLUMN_TYPE); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $columnType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($column->type) && $column->type == $columnType ? 'selected="selected"':''); ?>  value="<?php echo e($columnType); ?>"><?php echo e($columnType); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <label>Max length</label>
                                        <input value="<?php echo e(isset($column->max_length) ? $column->max_length : ''); ?>" class="form-control" id="id-source" type="text" name="max_length" placeholder="Max length"/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Kiểu tìm kiếm</label>
                                        <select name="search_type" class="form-control">
                                            <?php $__currentLoopData = unserialize(SEARCH_TYPE); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($column->search_type) && $column->search_type == $key ? 'selected="selected"':''); ?>  value="<?php echo e($key); ?>"><?php echo e($val); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Kiểu nhập dữ liệu</label>
                                        <select name="type_edit" class="form-control">
                                            <?php $__currentLoopData = unserialize(TYPE_EDIT); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeValue => $typeName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($column->type_edit) && $column->type_edit == $typeValue ? 'selected="selected"':''); ?>  value="<?php echo e($typeValue); ?>"><?php echo e($typeName); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Chọn table select <kiểu dữ liệu là select></label>
                                        <select name="select_table_id" class="form-control">
                                            <option value="">Please chose table data</option>
                                            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($column->select_table_id) && $column->select_table_id == $tbl->id ? 'selected="selected"':''); ?>  value="<?php echo e($tbl->id); ?>"><?php echo e($tbl->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Điều kiện select</label> 
                                       
                                        <input value="<?php echo e(isset($column->conditions) ? $column->conditions : ''); ?>" class="form-control" type="text" name="conditions" placeholder="json" />
                                    </div>

                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Giá trị mặc định</label>
                                        <input value="<?php echo e(isset($column->value_default) ? $column->value_default : ''); ?>" class="form-control" type="text" name="value_default" placeholder="default"/>
                                    </div>
                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>Chọn bảng liên kết</label>
                                        <select name="table_link" class="form-control">
                                            <option value="">Please chose table data</option>
                                            <?php $__currentLoopData = $tables; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tbl): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option <?php echo e(isset($column->select_table_id) && $column->select_table_id == $tbl->id ? 'selected="selected"':''); ?>  value="<?php echo e($tbl->id); ?>"><?php echo e($tbl->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <div class="col-xs-6 col-sm-3">
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($column->require) && $column->require == 1 ? 'checked="checked"':''); ?>  
                                                value="1" type="checkbox" name="require" />
                                            Require
                                        </label> 

                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($column->edit) && $column->edit == 1 ? 'checked="checked"':''); ?> 
                                                value="1" type="checkbox" name="edit" />
                                            Cho phép chỉnh sửa
                                        </label> 
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($column->add2search) && $column->add2search == 1 ? 'checked="checked"':''); ?> 
                                                value="1" type="checkbox" name="add2search" />
                                            Hiển thị trong form search
                                        </label> 
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($column->show_in_list) && $column->show_in_list == 1 ? 'checked="checked"':''); ?> 
                                                value="1" type="checkbox" name="show_in_list" />
                                                Hiển thị ở trang danh sách
                                        </label> 
                                        <br/>
                                        <label>
                                            <input <?php echo e(isset($column->fast_edit) && $column->fast_edit == 1 ? 'checked="checked"':''); ?>

                                                 value="1" type="checkbox" name="fast_edit" />
                                            Cho phép sửa nhanh
                                        </label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-6 col-sm-3 center-block">
                                        <br/>
                                        <?php if(empty($_GET['column'])): ?>
                                            <button class="btn btn-primary" type="submit" name="add_field">Thêm mới</button>
                                        <?php else: ?>
                                            <button class="btn btn-primary" type="submit" name="edit_field">Cập nhật</button>
                                        <?php endif; ?>
                                        <a href="<?php echo e(route('configTbl_edit', [$tableId])); ?>" class="btn btn-default" type="button">Cancel</a>
                                    </div>
                                </div>
                            </form> 
                        </fieldset>
                        <fieldset class="b0">
                            <legend>List Column</legend>
                            <section>
                                <div class="container-fluid">
                                    <div class="card">
                                        <div class="card-heading">
                                            <div class="row">
                                                    <div class="js-nestable-action">
                                                        <button type="submit" 
                                                                class="btn btn-primary btn-sm "
                                                                onclick="submitForm('.loading', '.form-nestable', 'none')" 
                                                                style="margin-left: 10px">
                                                            <i class="ion-chevron-down"></i>
                                                            Cập nhật lại thứ tự
                                                        </button>
                                                    </div>
                                                </div>
                                            <hr/>
                                            <div class="row loading"></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="dd" id="nestable">
                                                        <?php echo $htmlList; ?>

                                                    </div>
                                                    <form class="form-nestable" method="POST" action="<?php echo e(route('sortOrderColumn',[$tableId])); ?>">
                                                        <?php echo e(csrf_field()); ?>

                                                        <textarea style="display: none" name="ids" class="well" id="nestable-output"></textarea>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </fieldset>
                        <?php endif; ?>
                        <hr>
                    </div>
                </div>
                <!-- END row-->
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>