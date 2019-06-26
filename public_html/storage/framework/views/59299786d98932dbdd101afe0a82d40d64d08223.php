<div class="row menu-pho-diem">
    <b>Phổ điểm THPT</b>
    <?php $__currentLoopData = $phodiemCate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $pd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($idx == 0): ?> 
            <script>
                 phodiemId = '<?php echo e(isset($pd->id) ? $pd->id : 0); ?>';
            </script>
        <?php endif; ?>
        <a id="cate-phodiem<?php echo e(isset($pd->id) ? $pd->id : 0); ?>" class="<?php echo e($idx == 0 ? 'active':''); ?> _point cate-phodiem" onclick="phodiem(<?php echo e(isset($pd->id) ? $pd->id : 0); ?>)"><?php echo e(isset($pd->name) ? $pd->name : ''); ?></a>
        <span>|</span>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>