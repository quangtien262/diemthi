<?php $__env->startSection('content'); ?>

<div class="container">
    <div class='main_content'>
        <a href="<?php echo e(isset($banner->link) ? $banner->link : ''); ?>" target="_new">
            <img class="banner" src="<?php echo e(isset($banner->image) ? $banner->image : ''); ?>" alt="<?php echo e($banner->name); ?>" />
        </a>


        <div class="row main-icon-banner" id="main-tab">
            <img onclick="openTab('thpt')" class="icon icon-thpt" src="/frontend/image/icon_diemthi_thpt.png">
            <img onclick="openTab('10')" class="icon icon-10" src="/frontend/image/icon-diem-thi-tuyen-sinh.png">
            <img onclick="openTab('news')" class="icon icon-news" src="/frontend/image/icon-tin-tuc.png">
        </div>
        <div class="row main-form-search">
            <form method="GET" action="<?php echo e(route('searchThpt')); ?>" class="diem-tot-nghiep" id="diem-tot-nghiep">
                <h2 id="search-title">Điểm thi tốt nghiệp THPT</h2>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control input-cum-thi">
                            <option value="">Chọn cụm thi</option>
                            <?php echo $htmlOptionCitys; ?>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <input name="sbd" class="form-control input-sbd" value="<?php echo e(isset($_GET['sbd']) ? $_GET['sbd'] : ''); ?>" type="text"
                            placeholder="Số báo danh" required />
                    </div>
                </div>
                <div class="row text-center">
                    <input onclick="search(this)" type="button" class="btn btn-tra-cuu" value="Tra cứu" formId="#diem-tot-nghiep"></button>
                </div>
            </form>

            <form method="GET" action="<?php echo e(route('search10')); ?>" class="tuyen-sinh-lop10 _hidden" id="tuyen-sinh-lop10">
                <h2 id="search-title">Điểm thi tuyển sinh lớp 10</h2>
                <div class="row">
                    <div class="col-md-6">
                        <select class="form-control input-cum-thi">
                            <option value="">Chọn cụm thi</option>
                            <?php echo $htmlOptionCitys; ?>

                        </select>
                    </div>
                    <div class="col-md-6">
                        <input name="sbd" class="form-control input-sbd" value="<?php echo e(isset($_GET['sbd']) ? $_GET['sbd'] : ''); ?>" type="text"
                            placeholder="Số báo danh" required />
                    </div>
                </div>
                <div class="row text-center">
                    <input onclick="search(this)" type="button" class="btn btn-tra-cuu" value="Tra cứu" formId="#tuyen-sinh-lop10"></button>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="content-search-thpt diem-tot-nghiep">
                <?php echo $__env->make('frontend.pages.searchThpt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="content-search-ts10 _hidden tuyen-sinh-lop10">
                <?php echo $__env->make('frontend.pages.search10', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <div class="row main-ad01">
                <?php echo $adTop->name; ?>

            </div>
            <div class="row">
                <h2 class="tinmoi">Tin mới</h2>
            </div>
            <div class="row">
                <div id="content-left" class="col-xs-12 col-sm-6 col-md-8">
                    <?php  $idx = 0;  ?>
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $n): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php  $idx++;  ?>
                    <?php if($idx == 1): ?>
                    <div class="row">
                        <div class="col-xs-6 news-item">
                            <a href="<?php echo e($n->link); ?>">
                                <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>"
                                    src="<?php echo e($n->image); ?>">
                                <h3><?php echo e($n->name); ?></h3>
                            </a>
                            <p><?php echo e($n->description); ?></p>
                        </div>
                        <?php elseif($idx == 2): ?>
                        <div class="col-xs-6 news-item">
                            <a href="<?php echo e($n->link); ?>">
                                <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>"
                                    src="<?php echo e($n->image); ?>">
                                <h3><?php echo e($n->name); ?></h3>
                            </a>
                            <p><?php echo e($n->description); ?></p>
                        </div>
                    </div>
                    <?php elseif($idx == 3): ?>
                    <div class="row">
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="<?php echo e($n->link); ?>">
                                <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>"
                                    src="<?php echo e($n->image); ?>">
                                <h3><?php echo e($n->name); ?></h3>
                            </a>
                        </div>
                        <?php elseif($idx == 4): ?>
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="<?php echo e($n->link); ?>">
                                <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>"
                                    src="<?php echo e($n->image); ?>">
                                <h3><?php echo e($n->name); ?></h3>
                            </a>
                        </div>
                        <?php elseif($idx == 5): ?>
                        <div class="col-xs-6 news-item col-md-4">
                            <a href="<?php echo e($n->link); ?>">
                                <img class="img-responsive" title="<?php echo e($n->name); ?>" alt="<?php echo e($n->name); ?>"
                                    src="<?php echo e($n->image); ?>">
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
                <?php echo $ad->name; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="row main-ad01">
            <?php echo $adBot->name; ?>

        </div>
        
        <?php echo $__env->make('frontend.element.home.categoryPhodiem', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="clean"><br /></div>
        <div id="content-phodiem" class="row"></div>

    </div>
</div>

</div>
<div class="clearfix"></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.frontend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>