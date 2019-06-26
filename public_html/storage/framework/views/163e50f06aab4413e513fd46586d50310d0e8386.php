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
                <th colspan="2" class="text-center">Thí sinh</th>
                <th colspan="3" class="text-center">Môn thi chính</th>
                <th colspan="4" class="text-center">Bài khoa học tự nhiên</th>
                <th colspan="4" class="text-center">Bài khoa học xã hội</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Số báo danh</th>
                <th>Toán</th>
                <th>Ngữ văn</th>
                <th>Ngoại ngữ</th>
                <th>Vật lý</th>
                <th>Hóa học</th>
                <th>Sinh học</th>
                <th>Điểm trung bình</th>
                <th>Lịch sử</th>
                <th>Địa lý</th>
                <th>Giáo dục công dân</th>
                <th>Điểm trung bình</th>
            </tr>
            <?php if(isset($_GET['sbd'])): ?>
            <?php if(!empty($data)): ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $diem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(($idx + 1)); ?></td>
                <td><?php echo e(isset($diem->sobaodanh) ? $diem->sobaodanh : ''); ?></td>
                <td><?php echo e(isset($diem->toan) ? $diem->toan : '0.00'); ?></td>
                <td><?php echo e(isset($diem->ngu_van) ? $diem->ngu_van : '0.00'); ?></td>
                <td><?php echo e(isset($diem->ngoai_ngu) ? $diem->ngoai_ngu : '0.00'); ?></td>
                <td><?php echo e(isset($diem->vat_ly) ? $diem->vat_ly : '0.00'); ?></td>
                <td><?php echo e(isset($diem->hoa_hoc) ? $diem->hoa_hoc : '0.00'); ?></td>
                <td><?php echo e(isset($diem->sinh_hoc) ? $diem->sinh_hoc : '0.00'); ?></td>
                <td><?php echo e(round((($diem->vat_ly + $diem->hoa_hoc + $diem->sinh_hoc)/3), 2)); ?></td>
                <td><?php echo e(isset($diem->lich_su) ? $diem->lich_su : '0.00'  or '0.00'); ?></td>
                <td><?php echo e(isset($diem->dia_ly) ? $diem->dia_ly : '0.00'); ?></td>
                <td><?php echo e(isset($diem->gdcd) ? $diem->gdcd : '0.00'); ?></td>
                <td><?php echo e(round((($diem->lich_su + $diem->dia_ly + $diem->gdcd)/3), 2)); ?></td>
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
    paginate('.content-search-thpt');
</script>