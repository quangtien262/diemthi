
    <?php if($col->type_edit == 'text'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" class="form-control" type="text" placeholder=""/>
        </div>
    <?php elseif($col->type_edit == 'number'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" class="form-control" type="number" placeholder=""/>
        </div>
    <?php elseif($col->type_edit == 'textarea'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <textarea name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" class="form-control"><?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?></textarea>
        </div>
    <?php elseif($col->type_edit == 'select'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            
            <?php echo app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $data[$col->name], false, $col->conditions ); ?>

           
        </div>
    <?php elseif($col->type_edit == 'summoner'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <textarea name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" id="ckeditor"><?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?></textarea>
        </div>
    <?php elseif($col->type_edit == 'selects'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <?php echo app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $data[$col->name] ? $data[$col->name]:0, true, $col->conditions); ?>

        </div>
    <?php elseif($col->type_edit == 'select2'): ?>
        <span>select2</span>
    <?php elseif($col->type_edit == 'selects2'): ?>
        <span>selects2</span>
    <?php elseif($col->type_edit == 'ckeditor'): ?>
        <span>ckeditor</span>
    <?php elseif($col->type_edit == 'image_laravel'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="thumbnail" data-preview="holder1" class="btn btn-primary lfm">
                        <i class="ion-images"></i> Chọn ảnh
                    </a>
                </span>
                <input id="thumbnail" 
                    class="form-control" 
                    type="text" 
                    name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" 
                    value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" />
            </div>
            <?php if(!empty($data[$col->name])): ?>
                <img id="holder1" src="<?php echo e($data[$col->name]); ?>" style="margin-top:15px;max-height:100px;"/>
            <?php else: ?>
                <img id="holder1" style="margin-top:15px;max-height:100px;"/>
            <?php endif; ?>
        </div>
    <?php elseif($col->type_edit == 'images_laravel'): ?>
        <span>image_laravel</span>
    <?php elseif($col->type_edit == 'image'): ?>
        <span>image</span>
    <?php elseif($col->type_edit == 'images'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input id="images" multiple="multiple" type="file" class="form-control"/>
        </div>
        <div class="col-md-8">
             <?php  $images = json_decode($data[$col->name]);  ?>
                
            <div id="result_up_images">
                <br/>
                <?php if(is_array($images)): ?>
                    <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="item-images">
                                <a class="_red delete-img" onclick="deleteImage(this)">Xóa</a>
                                <img src="<?php echo e(isset($img) ? $img : ''); ?>"/>
                                <textarea class="_hidden" name="_images[]"><?php echo e(isset($img) ? $img : ''); ?></textarea>
                                <input type="hidden" value="path" name="_images_type[]"/>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    <?php elseif($col->type_edit == 'video'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="video" data-preview="holder_video" class="btn btn-primary video">
                        <i class="fa fa-picture-o"></i> Chọn video
                    </a>
                </span>
                <input id="video" 
                    class="form-control" 
                    type="text" 
                    name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" 
                    value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" />
            </div>
        </div>
    <?php elseif($col->type_edit == 'pdf'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a data-input="pdf" data-preview="holder_video" class="btn btn-primary pdf">
                        <i class="fa fa-picture-o"></i> Chọn file pdf
                    </a>
                </span>
                <input id="pdf" 
                    class="form-control" 
                    type="text" 
                    name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" 
                    value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" />
            </div>
        </div>
    <?php elseif($col->type_edit == 'file'): ?>
        <span>file</span>
    <?php elseif($col->type_edit == 'files'): ?>
        <span>files</span>
    <?php elseif($col->type_edit == 'date'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($data[$col->name]) ? $data[$col->name] : ''); ?>" class="form-control datepicker-1" type="text" placeholder="<?php echo e(isset($data[$col->display_name]) ? $data[$col->display_name] : ''); ?>"/>
        </div>
    <?php elseif($col->type_edit == 'input'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <select name="<?php echo e($col->name); ?>" class="form-control">
                <?php $__currentLoopData = unserialize(TYPE_EDIT); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $typeValue => $typeName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option <?php echo e(isset($column->type_edit) && $column->type_edit == $typeValue ? 'selected="selected"':''); ?>  value="<?php echo e($typeValue); ?>"><?php echo e($typeName); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
    <?php elseif($col->type_edit == 'block'): ?>
        <div class="col-md-8">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <em> (Vui lòng khởi tạo landingpage trước khi tạo các block con tương ứng) </em>
            <?php echo $__env->make('backend.element.listBlockLandingPage', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    <?php elseif($col->type_edit == 'encryption'): ?>
        <div class="col-md-6">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="" class="form-control" type="password" placeholder="Bỏ trống nếu bạn không muốn thay đổi"/>
        </div>
    <?php endif; ?>
