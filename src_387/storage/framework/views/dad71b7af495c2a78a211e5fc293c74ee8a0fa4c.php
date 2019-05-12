<?php $__env->startSection('content'); ?>

<div class="row">
    <a href="<?php echo e(isset($banner->link) ? $banner->link : ''); ?>" target="_new">
        <img class="banner" src="<?php echo e(isset($banner->image) ? $banner->image : ''); ?>" alt="<?php echo e($banner->name); ?>"/>
    </a>
</div>
<div class="row main-icon-banner">
    <a href=""><img src="/frontend/image/icon_diemthi_thpt.png"></a>
    <a href=""><img src="/frontend/image/icon-diem-thi-tuyen-sinh.png"></a>
    <a href=""><img src="/frontend/image/icon-tin-tuc.png"></a>
</div>
<div class="row main-form-search">
    <form method="GET" action="">
        <h2 id="search-title">Điểm thi tốt nghiệp THPT</h2>
        <div class="row">
            <div class="col-md-6">
                <select class="form-control">
                    <option value="">Chọn cụm thi</option>
                </select>
            </div>
            <div class="col-md-6">
                <input name="sbd" class="form-control" value="<?php echo e(isset($_GET['sbd']) ? $_GET['sbd'] : ''); ?>" type="text" placeholder="Số báo danh" required />
            </div>
        </div>
        <div class="row text-center">
            <input type="submit" class="btn btn-tra-cuu" value="Tra cứu">
        </div>
    </form>
</div>
<div class="row">
    <div class="table-responsive">
        <br />
        <table class="table table-bordered">
            <thead>
                <?php if(isset($_GET['sbd']) && !empty($diemThiThpt)): ?> 
                    <tr>
                        <th colspan="12" class="_success">
                            Tìm thấy <b class="_red"><?php echo e($diemThiThpt->total()); ?></b> kết quả cho số báo danh <b  class="_red"><?php echo e($_GET['sbd']); ?></b>
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
                    <?php if(!empty($diemThiThpt)): ?>
                        <?php $__currentLoopData = $diemThiThpt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $idx => $diem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                               <?php echo $diemThiThpt->appends($_GET)->render(); ?> 
                            </td>
                        </tr>
                    <?php else: ?>
                    <tr>
                        <td colspan="13" class="text-center">
                            <br/>
                            <p><em>Không tìm thấy kết quả nào, vui lòng nhập lại số báo danh của bạn.</em></p>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php else: ?>
                <tr>
                    <td colspan="13" class="text-center">
                        <br/>
                        <p><em>Vui lòng nhập số báo danh ở trên để tìm kiếm điểm thi của bạn.</em></p>
                    </td>   
                </tr>
                <?php endif; ?>
            </thead>
        </table>
    </div>
    <div class="row main-ad01">
        <a href="<?php echo e(isset($adTop->link) ? $adTop->link : ''); ?>" target="_new">
            <img class="ad01" src="<?php echo e(isset($adTop->image) ? $adTop->image : ''); ?>" alt="<?php echo e($adTop->name); ?>" title="<?php echo e($adTop->name); ?>"/>
        </a>
    </div>
    <div class="row">
        <h2 class="tinmoi">Tin mới</h2>
    </div>
    <div class="row">
        <div id="content-left" class="col-xs-12 col-sm-6 col-md-8">
            <?php   $idx = 0;   ?>
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php   $idx++;   ?>
                <?php if($idx == 1): ?>
                <div class="row">
                    <div class="col-xs-6 news-item">
                        <a href="<?php echo e($n->link); ?>">
                            <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>" src="<?php echo e($n->image); ?>">
                            <h3><?php echo e($n->name); ?></h3>
                        </a>
                        <p><?php echo e($n->description); ?></p>
                    </div>
                <?php elseif($idx == 2): ?>    
                    <div class="col-xs-6 news-item">
                        <a href="<?php echo e($n->link); ?>">
                            <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>" src="<?php echo e($n->image); ?>">
                            <h3><?php echo e($n->name); ?></h3>
                        </a>
                        <p><?php echo e($n->description); ?></p>
                    </div>
                </div>
                <?php elseif($idx == 3): ?>
                <div class="row">
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="<?php echo e($n->link); ?>">
                            <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>" src="<?php echo e($n->image); ?>">
                            <h3><?php echo e($n->name); ?></h3>
                        </a>
                    </div>
                <?php elseif($idx == 4): ?>
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="<?php echo e($n->link); ?>">
                            <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>" src="<?php echo e($n->image); ?>">
                            <h3><?php echo e($n->name); ?></h3>
                        </a>
                    </div> 
                <?php elseif($idx == 5): ?>
                    <div class="col-xs-6 news-item col-md-4">
                        <a href="<?php echo e($n->link); ?>">
                            <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>" src="<?php echo e($n->image); ?>">
                            <h3><?php echo e($n->name); ?></h3>
                        </a>
                    </div>   
                </div>    
                <?php  $idx = 0;  ?>              
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if($idx == 1 || $idx == 3 || $idx == 4): ?> 
                </div>
            <?php endif; ?>
        </div>
        <div id="content-right" class="col-xs-6 news-item col-md-4">
            <?php $__currentLoopData = $adRight; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <a href="<?php echo e(isset($ad->link) ? $ad->link : ''); ?>" target="_new">
                    <img class="ad02" alt="<?php echo e($ad->name); ?>" title="<?php echo e($ad->name); ?>" src="<?php echo e($ad->image); ?>" />
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <div class="row main-ad01">
        <img class="ad01" src="/frontend/image/quang-cao-01.png">
    </div>
    <div class="row menu-pho-diem">
        <b>Phổ điểm THPT</b>
        <a class="active" href="">Toán</a>
        <span>|</span>
        <a href="">Ngữ văn</a>
        <span>|</span>
        <a href="">Ngoại ngữ</a>
    </div>
    <div class="clean"><br/></div>
    <div class="row main-pho-diem">
        <?php for($i=0; $i<=10; $i=$i+0.2): ?>
            
            <div class="item-phodiem">
                
                <div class="col-phodiem01" style="height:495px"></div>
                <div class="col-phodiem02" style="height:5px"></div>
            </div>
        <?php endfor; ?>
    </div>
    <div class="row">
        <?php  $idx = 0;  ?>
    <?php for($i=0; $i<=10; $i=$i+0.2): ?>
        <?php  $idx++;  ?>
        <div class="item-thang-diem">
            <?php if(in_array($idx, [1,6,11,16,21,26,31,36,41,46,51])): ?>
                <span class="_red diem22"><?php echo e($i); ?></span>
            <?php else: ?>
                <span class="thang-diem"><?php echo e($i); ?></span>
            <?php endif; ?>
        </div>
    <?php endfor; ?>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>