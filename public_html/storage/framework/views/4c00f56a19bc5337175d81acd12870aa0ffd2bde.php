
    <?php if($col->type_edit == 'text'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?>" class="form-control" type="text" placeholder=""/>
        </div>
    <?php elseif($col->type_edit == 'textarea'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <textarea name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" class="form-control"><?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?></textarea>
        </div>
    <?php elseif($col->type_edit == 'select'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <?php if(isset($_GET[$col->name])): ?>
              <?php echo app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $_GET[$col->name]); ?>

            <?php else: ?>
              <?php echo app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, 0); ?>

            <?php endif; ?>
        </div>
    <?php elseif($col->type_edit == 'summoner'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <textarea name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" class="summernote"><?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?></textarea>
        </div>
    <?php elseif($col->type_edit == 'selects'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <?php echo app('ClassTables')->getHtmlSelectForTable($col->name, $col->select_table_id, $_GET[$col->name] ? $_GET[$col->name]:0, true); ?>

        </div>
    <?php elseif($col->type_edit == 'select2'): ?>
        <span>select2</span>
    <?php elseif($col->type_edit == 'selects2'): ?>
        <span>selects2</span>
    <?php elseif($col->type_edit == 'ckeditor'): ?>
        <span>ckeditor</span>
    <?php elseif($col->type_edit == 'image_laravel'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Chọn file
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?>"/>
            </div>
            <img id="holder" style="margin-top:15px;max-height:100px;" src="<?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?>">
        </div>
    <?php elseif($col->type_edit == 'images_laravel'): ?>
        <span>image_laravel</span>
    <?php elseif($col->type_edit == 'image'): ?>
        <span>image</span>
    <?php elseif($col->type_edit == 'images'): ?>
        <span>images</span>
    <?php elseif($col->type_edit == 'file'): ?>
        <span>file</span>
    <?php elseif($col->type_edit == 'files'): ?>
        <span>files</span>
    <?php elseif($col->type_edit == 'date'): ?>
        <div class="col-xs-6 col-sm-3">
            <br/>
            <label><?php echo e(isset($col->display_name) ? $col->display_name : $col->name); ?></label>
            <input name="<?php echo e(isset($col->name) ? $col->name : ''); ?>" value="<?php echo e(isset($_GET[$col->name]) ? $_GET[$col->name] : ''); ?>" class="form-control datepicker-1" type="text" placeholder="<?php echo e(isset($data[$col->display_name]) ? $data[$col->display_name] : ''); ?>"/>
        </div>
    <?php endif; ?>
