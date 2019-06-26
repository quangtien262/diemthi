<div class="table-responsive">
        <br />
        <table class="table table-bordered">
            <thead>
                <?php if(isset($_GET['sbd']) && !empty($data)): ?>
                <tr>
                    <th colspan="12" class="_success">
                        Tìm thấy <b class="_red"><?php echo e($data->total()); ?></b> kết quả cho số báo danh <b
                            class="_red"><?php echo e($_GET['sbd']); ?></b>
                    </th>
                </tr>
                <?php endif; ?>
                <tr>
                    <th>#</th>
                    <th>Số báo danh</th>
                    <th>Họ</th>
                    <th>Tên</th>
                    <th>Điểm 1</th>
                    <th>Điểm 2</th>
                    <th>Điểm 3</th>
                    <th>Điểm 4</th>
                </tr>
                <?php if(isset($_GET['sbd'])): ?>
                <?php if(!empty($data)): ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $diem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(($idx + 1)); ?></td>
                    <td><?php echo e(isset($diem->sbd) ? $diem->sbd : ''); ?></td>
                    <td><?php echo e(isset($diem->ho) ? $diem->ho : '0.00'); ?></td>
                    <td><?php echo e(isset($diem->ten) ? $diem->ten : '0.00'); ?></td>
                    <td><?php echo e(isset($diem->diem1) ? $diem->diem1 : '0.00'); ?></td>
                    <td><?php echo e(isset($diem->diem2) ? $diem->diem2 : '0.00'); ?></td>
                    <td><?php echo e(isset($diem->diem3) ? $diem->diem3 : '0.00'); ?></td>
                    <td><?php echo e(isset($diem->diem4) ? $diem->diem4 : '0.00'); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td colspan="13">
                        <?php echo $data->appends($_GET)->render(); ?>

                    </td>
                </tr>
                <?php else: ?>
                <tr>
                    <td colspan="13" class="text-center">
                        <br />
                        <p><em>Không tìm thấy kết quả nào, vui lòng nhập lại số báo danh của bạn.</em></p>
                    </td>
                </tr>
                <?php endif; ?>
                <?php else: ?>
                <tr>
                    <td colspan="13" class="text-center">
                        <br />
                        <p><em>Vui lòng nhập số báo danh ở trên để tìm kiếm điểm thi của bạn.</em></p>
                    </td>
                </tr>
                <?php endif; ?>
            </thead>
        </table>
    </div>
    <script>
        paginate('.content-search-ts10');
    </script>